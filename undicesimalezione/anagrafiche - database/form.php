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
          <form class="" method="post" action="submit.php">
            <div class="form-group"> 
				<label>Cognome</label>
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("cognome", $errori)) {
					$messaggio = $errori['cognome'];
				}
				?>
				<input type="text" name="cognome" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il cognome" <?=array_key_exists('cognome', $old) ? "value='".$old['cognome']."'" : ""?> > 
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
				<input type="text" name="nome" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il nome" <?=array_key_exists('nome', $old) ? "value='".$old['nome']."'" : ""?>> 
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
				<input type="date" name="data_nascita" class="form-control <?=$messaggio ? "is-invalid" : ""?>" <?=array_key_exists('data_nascita', $old) ? "value='".$old['data_nascita']."'" : ""?>>
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
				<input type="text" name="codice_fiscale" class="form-control <?=$messaggio ? "is-invalid" : ""?>" <?=array_key_exists('codice_fiscale', $old) ? "value='".$old['codice_fiscale']."'" : ""?> placeholder="Inserire il codice fiscale">
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
				<input type="text" name="via_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la via di residenza" <?=array_key_exists('via_residenza', $old) ? "value='".$old['via_residenza']."'" : ""?>> 
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
				<input type="text" name="civico_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il numero civico di residenza" <?=array_key_exists('civico_residenza', $old) ? "value='".$old['civico_residenza']."'" : ""?>> 
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
				<input type="text" name="cap_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il CAP di residenza" <?=array_key_exists('cap_residenza', $old) ? "value='".$old['cap_residenza']."'" : ""?>> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>Comune di Residenza</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("comune_residenza", $errori)) {
					$messaggio = $errori['comune_residenza'];
				}
				?>
				<input type="text" name="comune_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il Comune di residenza" <?=array_key_exists('comune_residenza', $old) ? "value='".$old['comune_residenza']."'" : ""?>> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 
			<div class="form-group"> 
				<label>Provincia di Residenza</label>
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("provincia_residenza", $errori)) {
					$messaggio = $errori['provincia_residenza'];
				}
				?>				
				<input type="text" name="provincia_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la provincia di residenza" <?=array_key_exists('provincia_residenza', $old) ? "value='".$old['provincia_residenza']."'" : ""?>> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 
			<div class="form-group"> 
				<label>Regione di Residenza</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("regione_residenza", $errori)) {
					$messaggio = $errori['regione_residenza'];
				}
				?>
				<input type="text" name="regione_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la regione di residenza" <?=array_key_exists('regione_residenza', $old) ? "value='".$old['regione_residenza']."'" : ""?>> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 
			<div class="form-group"> 
				<label>Stato di Residenza</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("stato_residenza", $errori)) {
					$messaggio = $errori['stato_residenza'];
				}
				?>
				<input type="text" name="stato_residenza" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire lo Stato di residenza" <?=array_key_exists('stato_residenza', $old) ? "value='".$old['stato_residenza']."'" : ""?>> 
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
				<input type="text" name="via_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la via di domicilio" <?=array_key_exists('via_domicilio', $old) ? "value='".$old['via_domicilio']."'" : ""?>> 
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
				<input type="text" name="civico_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il numero civico di domicilio" <?=array_key_exists('civico_domicilio', $old) ? "value='".$old['civico_domicilio']."'" : ""?>> 
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
				<input type="text" name="cap_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il CAP di domicilio" <?=array_key_exists('cap_domicilio', $old) ? "value='".$old['cap_domicilio']."'" : ""?>> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>Comune di Domicilio</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("comune_domicilio", $errori)) {
					$messaggio = $errori['comune_domicilio'];
				}
				?>
				<input type="text" name="comune_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il Comune di domicilio" <?=array_key_exists('comune_domicilio', $old) ? "value='".$old['comune_domicilio']."'" : ""?>> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 
			<div class="form-group"> 
				<label>Provincia di Domicilio</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("provincia_domicilio", $errori)) {
					$messaggio = $errori['provincia_domicilio'];
				}
				?>
				<input type="text" name="provincia_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la provincia di domicilio" <?=array_key_exists('provincia_domicilio', $old) ? "value='".$old['provincia_domicilio']."'" : ""?>> 
			</div> 
			<div class="form-group"> 
				<label>Regione di Domicilio</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("regione_domicilio", $errori)) {
					$messaggio = $errori['regione_domicilio'];
				}
				?>
				<input type="text" name="regione_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la regione di domicilio" <?=array_key_exists('regione_domicilio', $old) ? "value='".$old['regione_domicilio']."'" : ""?>> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div> 
			<div class="form-group"> 
				<label>Stato di Domicilio</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("stato_domicilio", $errori)) {
					$messaggio = $errori['stato_domicilio'];
				}
				?>
				<input type="text" name="stato_domicilio" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire lo Stato di domicilio" <?=array_key_exists('stato_domicilio', $old) ? "value='".$old['stato_domicilio']."'" : ""?>> 
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
				<input type="email" name="email" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire l'indirizzo email" <?=array_key_exists('email', $old) ? "value='".$old['email']."'" : ""?>> 
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
				<input type="text" name="telefono" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il numero di telefono" <?=array_key_exists('telefono', $old) ? "value='".$old['telefono']."'" : ""?>> 
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