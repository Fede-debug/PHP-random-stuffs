<?php
$errori = [];
session_start();
$errori = [];
$errori= $_SESSION['errori'];
unset($_SESSION['errori']);

?>

<!DOCTYPE html>
<html>

<?php


require_once 'head.html';

?>

<body>
 
 <?php 
 
 include 'navbar.html';
 
 ?>
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
			$messaggio= null;
			if(array_key_exists("cognome",$errori)){
				$messaggio= $errori['cognome']
			}
			?>
			
			<input type="text" name="cognome" class="form-control <?=$messaggio? "is-invalid" : "" ?>" placeholder="Inserire Cognome"> 
			<div class="invalid-feedback">
				<?=$messaggio? $messaggio : ""?>
			</div>
			 
			</div>
            <div class="form-group"> 
			<label>Nome</label> 
			<input type="text" name="nome" class="form-control" placeholder="Inserire Nome">
			</div> 
			
			<div class="form-group"> 
			<label>Data di nascita</label> 
			<input type="date" name="data_nascita" class="form-control" >
			</div> 
			
			<div class="form-group"> 
			<label>Via di residenza</label> 
			<input type="text" name="via_residenza" class="form-control" placeholder="Inserire la via di residenza">
			</div> 
			
			<div class="form-group"> 
			<label>Numero civico di residenza</label> 
			<input type="text" name="civico_residenza" class="form-control" placeholder="Inserire numero civico di residenza">
			</div> 
			
			<div class="form-group"> 
			<label>Numero CAP di residenza</label> 
			<input type="text" name="cap_residenza" class="form-control" placeholder="Inserire CAP di residenza">
			</div> 
			
			<div class="form-group"> 
			<label>Comune di residenza</label> 
			<input type="text" name="comune_residenza" class="form-control" placeholder="Inserire Comune di residenza">
			</div>
			
			<div class="form-group"> 
			<label>Provincia di residenza</label> 
			<input type="text" name="provincia_residenza" class="form-control" placeholder="Inserire Provincia di residenza">
			</div>
			
			<div class="form-group"> 
			<label>Regione di residenza</label> 
			<input type="text" name="regione_residenza" class="form-control" placeholder="Inserire Regione di residenza">
			</div>
			
			<div class="form-group"> 
			<label>Stato di residenza</label> 
			<input type="text" name="stato_residenza" class="form-control" placeholder="Inserire Stato di residenza">
			</div>
			
			<div class="form-group"> 
			<label>Via di domicilio</label> 
			<input type="text" name="via_domicilio" class="form-control" placeholder="Inserire la via di domicilio">
			</div> 
			
			<div class="form-group"> 
			<label>Numero civico di domicilio</label> 
			<input type="text" name="civico_domicilio" class="form-control" placeholder="Inserire numero civico di domicilio">
			</div> 
			
			<div class="form-group"> 
			<label>Numero CAP di domicilio</label> 
			<input type="text" name="cap_domicilio" class="form-control" placeholder="Inserire CAP di domicilio">
			</div> 
			
			<div class="form-group"> 
			<label>Comune di domicilio</label> 
			<input type="text" name="comune_domicilio" class="form-control" placeholder="Inserire Comune di domicilio">
			</div>
			
			<div class="form-group"> 
			<label>Provincia di domicilio</label> 
			<input type="text" name="provincia_domicilio" class="form-control" placeholder="Inserire Provincia di domicilio">
			</div>
			
			<div class="form-group"> 
			<label>Regione di domicilio</label> 
			<input type="text" name="regione_domicilio" class="form-control" placeholder="Inserire Regione di domicilio">
			</div>
			
			<div class="form-group"> 
			<label>Stato di domicilio</label> 
			<input type="text" name="stato_domicilio" class="form-control" placeholder="Inserire Stato di domicilio">
			</div>
			
			<div class="form-group"> 
			<label>Email</label> 
			<input type="email" name="email" class="form-control" placeholder="Inserire email">
			</div>
			
			<div class="form-group"> 
			<label>Telefono</label> 
			<input type="text" name="telefono" class="form-control" placeholder="Inserire Stato di domicilio">
			</div>
			
			<a class="btn btn-danger" href="index.php">Annulla</a>
			
			
			
			<button type="submit" class="btn btn-primary">Salva</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>



</html>