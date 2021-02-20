<?php 
require_once 'PersonaController.php';

$persone = PersonaController::caricaPersone();
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
		 
		 <h1>Indirizzo Residenza</h1>
		 <ul>
			<li><?=$persona->getIndirizzoResidenza()->getVia();?>&nbsp;<?=$persona->getIndirizzoResidenza()->getCivico();?></li>
			<li><?=$persona->getIndirizzoResidenza()->getCap()?>&nbsp;<?=$persona->getIndirizzoResidenza()->getComune()->getNome()?>&nbsp; (<?=$persona->getIndirizzoResidenza()->getComune()->getProvincia()?>) - <?=$persona->getIndirizzoResidenza()->getComune()->getStato()?></li>
		 </ul>
		 
		 <h1>Indirizzo Domicilio</h1>
		 <ul>
			<li><?=$persona->getIndirizzoDomicilio()->getVia();?>&nbsp;<?=$persona->getIndirizzoDomicilio()->getCivico();?></li>
			<li><?=$persona->getIndirizzoDomicilio()->getCap()?>&nbsp;<?=$persona->getIndirizzoDomicilio()->getComune()->getNome()?>&nbsp; (<?=$persona->getIndirizzoDomicilio()->getComune()->getProvincia()?>) - <?=$persona->getIndirizzoDomicilio()->getComune()->getStato()?></li>
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