<?php
session_start();
$errori = [];
$old = [];
if(array_key_exists('errori', $_SESSION)) {
	$errori = $_SESSION['errori'];
	if(array_key_exists('old', $_SESSION)) { 
		$old = $_SESSION['old']; 
		unset($_SESSION['old']); 
	}
	unset($_SESSION['errori']); 
}
require_once 'PersonaController.php';
require_once 'ComuneController.php';

if(!isset($_GET['id']) || empty(trim($_GET['id']))) {
	exit("ID non pervenuto");
}

$id = trim($_GET['id']);
$persona = PersonaController::dettaglioPersona($id);

$elencoComuni = ComuneController::caricaComuni();

?>
<!DOCTYPE html>
<html>

<?php include 'head.html';?>

<body>

  <?php include 'navbar.html'; ?>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Heading 1</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="" method="post" action="salva_persona.php">
		  
			<input type="hidden" name="id" value="<?=$persona->getId()?>">
			
            <div class="form-group"> 
				<label>Cognome</label>
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("cognome", $errori)) {
					$messaggio = $errori['cognome'];
				}
				?>
				<input type="text" name="cognome" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il cognome" value="<?=array_key_exists('cognome', $old) ? $old['cognome'] : $persona->getCognome()?>"  > 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
            <div class="form-group"> 
				<label>Nome</label>
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("nome", $errori)) {
					$messaggio = $errori['nome'];
				}
				?>
				<input type="text" name="nome" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il nome" value="<?=array_key_exists('nome', $old) ? $old['nome'] : $persona->getNome() ?>" > 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>Data di nascita</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("data_nascita", $errori)) {
					$messaggio = $errori['data_nascita'];
				}
				?>
				<input type="date" name="data_nascita" class="form-control <?=$messaggio ? "is-invalid" : ""?>" value="<?=array_key_exists('data_nascita', $old) ? $old['data_nascita'] : $persona->getDataNascita() ?>">
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			
			<div class="form-group"> 
				<label>Codice Fiscale</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("codice_fiscale", $errori)) {
					$messaggio = $errori['codice_fiscale'];
				}
				?>
				<input type="text" name="codice_fiscale" class="form-control <?=$messaggio ? "is-invalid" : ""?>" value="<?=array_key_exists('codice_fiscale', $old) ? $old['codice_fiscale'] : $persona->getCodiceFiscale() ?>" placeholder="Inserire il codice fiscale">
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			
			<div class="form-group"> 
				<label>Via di Residenza</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("via_residenza", $errori)) {
					$messaggio = $errori['via_residenza'];
				}
				?>
				<input type="text" name="via_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la via di residenza" value="<?=array_key_exists('via_residenza', $old) ? $old['via_residenza'] : $persona->getIndirizzoResidenza()->getVia() ?>"> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>Civico di Residenza</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("civico_residenza", $errori)) {
					$messaggio = $errori['civico_residenza'];
				}
				?>
				<input type="text" name="civico_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il numero civico di residenza" value="<?=array_key_exists('civico_residenza', $old) ? $old['civico_residenza'] : $persona->getIndirizzoResidenza()->getCivico()?>" > 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>CAP di Residenza</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("cap_residenza", $errori)) {
					$messaggio = $errori['cap_residenza'];
				}
				?>
				<input type="text" name="cap_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il CAP di residenza" value="<?=array_key_exists('cap_residenza', $old) ? $old['cap_residenza'] : $persona->getIndirizzoResidenza()->getCap()?>" > 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>Comune di Residenza</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("id_comune_residenza", $errori)) {
					$messaggio = $errori['id_comune_residenza'];
				}
				?>
				<select name="id_comune_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>">
					<option value="">Selezionare il comune...</option>
					<?php 
					$id = $persona->getIndirizzoResidenza()->getComune()->getId();
					foreach($elencoComuni as $comune) {
						if( array_key_exists('id_comune_residenza', $old) && $old['id_comune_residenza'] == $comune->getId() ) {
							$id = $old['id_comune_residenza'];
						} 
					?>
					<option <?=$id == $comune->getId() ? "selected" : "" ?> value="<?=$comune->getId()?>" ><?=$comune->getNome()?> (<?=$comune->getProvincia()?>) - <?=$comune->getRegione()?> - <?=$comune->getStato()?></option>
					<?php 
					} 
					?>
				</select>
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 

			<div class="form-group"> 
				<label>Via di Domicilio</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("via_domicilio", $errori)) {
					$messaggio = $errori['via_domicilio'];
				}
				?>
				<input type="text" name="via_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la via di domicilio" value="<?=array_key_exists('via_domicilio', $old) ? $old['via_domicilio'] : $persona->getIndirizzoDomicilio()->getVia() ?>"> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>Civico di Domicilio</label>
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("civico_domicilio", $errori)) {
					$messaggio = $errori['civico_domicilio'];
				}
				?>				
				<input type="text" name="civico_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il numero civico di domicilio" value="<?=array_key_exists('civico_domicilio', $old) ? $old['civico_domicilio'] : $persona->getIndirizzoDomicilio()->getCivico()?>"> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>CAP di Domicilio</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("cap_domicilio", $errori)) {
					$messaggio = $errori['cap_domicilio'];
				}
				?>
				<input type="text" name="cap_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il CAP di domicilio" value="<?=array_key_exists('cap_domicilio', $old) ? $old['cap_domicilio'] : $persona->getIndirizzoDomicilio()->getCap() ?>"> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>Comune di Domicilio</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("id_comune_domicilio", $errori)) {
					$messaggio = $errori['id_comune_domicilio'];
				}
				?>
				<select name="id_comune_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>">
					<option value="">Selezionare il comune...</option>
					<?php 
					$id = $persona->getIndirizzoDomicilio()->getComune()->getId();
					foreach($elencoComuni as $comune) {
						if( array_key_exists('id_comune_domicilio', $old) && $old['id_comune_domicilio'] == $comune->getId() ) {
							$id = $old['id_comune_domicilio'];
						} 
					?>
					<option <?=$id == $comune->getId() ? "selected" : "" ?> value="<?=$comune->getId()?>" ><?=$comune->getNome()?> (<?=$comune->getProvincia()?>) - <?=$comune->getRegione()?> - <?=$comune->getStato()?></option>
					<?php 
					} 
					?>
				</select>
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 

			<div class="form-group"> 
				<label>Email</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("email", $errori)) {
					$messaggio = $errori['email'];
				}
				?>
				<input type="email" name="email" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire l'indirizzo email" value="<?=array_key_exists('email', $old) ? $old['email'] : $persona->getEmail() ?>"> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 
			
			<div class="form-group"> 
				<label>Telefono</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("telefono", $errori)) {
					$messaggio = $errori['telefono'];
				}
				?>
				<input type="text" name="telefono" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il numero di telefono" value="<?=array_key_exists('telefono', $old) ? $old['telefono'] : $persona->getTelefono()?>"> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 
			
			<a class="btn btn-danger" href="index.php">Annulla</a>
			<button type="submit" class="btn btn-primary">Salva</button>
          </form>
		  
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>


</html>