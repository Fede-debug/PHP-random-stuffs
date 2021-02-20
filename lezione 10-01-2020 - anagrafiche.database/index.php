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
			<a class="btn btn-primary" href="form.php">Nuova Anagrafica</a>
		</div>
	</div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
				<tr>
                  <th>#</th>
                  <th>Cognome</th>
                  <th>Nome</th>
				  <th>Data di nascita</th>
				  <th>Codice fiscale</th>
				  
				  <!--th>Via Residenza</th>
				  <th>Civico Residenza</th>
				  <th>CAP Residenza</th>
				  <th>Comune Residenza</th>
				  <th>Provincia Residenza</th>
				  <th>Regione Residenza</th>
				  <th>Stato Residenza</th>
				    
				  <th>Via Domicilio</th>
				  <th>Civico Domicilio</th>
				  <th>CAP Domicilio</th>
				  <th>Comune Domicilio</th>
				  <th>Provincia Domicilio</th>
				  <th>Regione Domicilio</th>
				  <th>Stato Domicilio</th-->
				  
				  <th>Email</th>
				  <th>Telefono</th>
				  
				  <th>Dettaglio</th>
                </tr>
              </thead>
              <tbody>
			   <?php
				
				foreach($persone as $persona) {
				?>
                <tr>
                  <th><?=$persona->getId();?></th>
                  <td><?=$persona->getCognome()?></td>
                  <td><?=$persona->getNome();?></td>
				  <td><?=$persona->getDataNascita();?></td>
				  <td><?=$persona->getCodiceFiscale();?></td>
				  
				  <!--td><?=$persona->getIndirizzoResidenza()->getVia();?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getCivico()?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getCap()?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getComune()->getNome()?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getComune()->getProvincia()?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getComune()->getRegione()?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getComune()->getStato()?></td>
				  
				  <td><?=$persona->getIndirizzoDomicilio()->getVia();?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getCivico()?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getCap()?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getComune()->getNome()?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getComune()->getProvincia()?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getComune()->getRegione()?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getComune()->getStato()?></td-->
				  
				  
				  <td><?=$persona->getEmail();?></td>
				  <td><?=$persona->getTelefono();?></td>
				  
				  <td><a href="dettaglio_persona.php?id=<?=$persona->getId();?>">Dettaglio</a></td>
                </tr>
				<?php 
				} 
				?>
              </tbody>
            </table>
          </div>
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