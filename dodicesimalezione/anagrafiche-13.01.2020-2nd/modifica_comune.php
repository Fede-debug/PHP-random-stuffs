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

if(!isset($_GET['id']) || empty(trim($_GET['id']))) {
	exit("ID non pervenuto");
}
require_once 'ComuneController.php';
//$elencoComuni = ComuneController::caricaComuni();

$id = trim($_GET['id']);
$comune = ComuneController::dettaglioComune($id);
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
          <h1 class="">Modifica comune</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="" method="post" action="salva_comune.php">
            <div class="form-group"> 
			
				<input type="hidden" name="id" value="<?=$comune->getId()?>">
				
				<label>Nome</label>
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("nome", $errori)) {
					$messaggio = $errori['nome'];
				}
				?>
				<input type="text" name="nome" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire il nome" value="<?=array_key_exists('nome', $old) ? $old['nome'] : $comune->getNome()?>"> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			
			<div class="form-group"> 
				<label>Provincia</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("provincia", $errori)) {
					$messaggio = $errori['provincia'];
				}
				?>
				<input type="text" name="provincia" class="form-control <?=$messaggio ? "is-invalid" : ""?>"  placeholder="Inserire la provincia" value="<?=array_key_exists('provincia', $old) ? $old['provincia'] : $comune->getProvincia()?>">
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			
			<div class="form-group"> 
				<label>Regione</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("regione", $errori)) {
					$messaggio = $errori['regione'];
				}
				?>
				<input type="text" name="regione" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire la regione" value="<?=array_key_exists('regione', $old) ? $old['regione'] : $comune->getRegione()?>"> 
				<div class="invalid-feedback">
					<?=$messaggio ? $messaggio : ""?>
				</div>
			</div>
			<div class="form-group"> 
				<label>Stato</label> 
				<?php
				$messaggio = null;
				if(!empty($errori) && array_key_exists("stato", $errori)) {
					$messaggio = $errori['stato'];
				}
				?>
				<input type="text" name="stato" class="form-control <?=$messaggio ? "is-invalid" : ""?>" placeholder="Inserire lo Stato" value="<?=array_key_exists('stato', $old) ? $old['stato'] : $comune->getStato()?>"> 
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