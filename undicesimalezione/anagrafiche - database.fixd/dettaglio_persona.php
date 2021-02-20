<?php 
require_once 'PersonaController.php';

//$persone = PersonaController::caricaPersone();
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
         
		 <?php 
			$persona = PersonaController::dettaglioPersona($_GET['id']); 
		 ?>
		 
		 <h1><?=$persona->getCognome()?> <?=$persona->getNome()?></h1>
		 <h2><?=$persona->getDataNascita()?> <?=$persona->getCodiceFiscale()?></h2>
		 <h3><?=$persona->getEmail()?> <?=$persona->getTelefono()?></h3>
		 
		 <h1>Indirizzo di Residenza</h1>
		 <ul>
			<li><b><?=$persona->getIndirizzoResidenza()->getVia();?> <?=$persona->getIndirizzoResidenza()->getCivico();?></b></li>
			<li><b><?="CAP: " . $persona->getIndirizzoResidenza()->getCap();?></b></li>
			<li><b><?="Comune di residenza: " . $persona->getIndirizzoResidenza()->getComune()->getNome();?></b></li>
			<li><b><?="Provincia di residenza: " . $persona->getIndirizzoResidenza()->getComune()->getProvincia();?></b></li>
			<li><b><?="Regione di residenza: " . $persona->getIndirizzoResidenza()->getComune()->getRegione();?></b></li>
			<li><b><?="Stato di residenza: " . $persona->getIndirizzoResidenza()->getComune()->getStato();?></b></li>
		 </ul>
		 
		 <h1>Indirizzo di Domicilio</h1>
		 <ul>
			<li><b><?=$persona->getIndirizzoDomicilio()->getVia();?> <?=$persona->getIndirizzoDomicilio()->getCivico();?></b></li>
			<li><b><?="CAP: " . $persona->getIndirizzoDomicilio()->getCap();?></b></li>
			<li><b><?="Comune di domicilio: " . $persona->getIndirizzoDomicilio()->getComune()->getNome();?></b></li>
			<li><b><?="Provincia di domicilio: " . $persona->getIndirizzoDomicilio()->getComune()->getProvincia();?></b></li>
			<li><b><?="Regione di domicilio: " . $persona->getIndirizzoDomicilio()->getComune()->getRegione();?></b></li>
			<li><b><?="Stato di domicilio: " . $persona->getIndirizzoDomicilio()->getComune()->getStato();?></b></li>
		 </ul>

        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>