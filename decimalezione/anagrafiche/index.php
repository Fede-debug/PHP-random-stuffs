<?php
require_once 'PersonaController.php';
$personaController= new PersonaController();
$persone = $personaController->caricaPersone();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
  
  <?php
  include 'navbar.html';
  ?>
		
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="">Heading 3 <!--span class="badge badge-light"> New</span--></h3>
        </div>
      </div>
    </div>
  </div>
  
   <div class="row">
        <div class="col-md-12">
		
		<a class="btn btn-primary " href="form.php">Nuova Anagrafica</a>
		
		</div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-striped table-dark">
              <thead>
			  
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Cognome</th>
                  <th scope="col">Nome</th>
				  <th scope="col">Data di nascita</th>
				  <th scope="col">Codice fiscale</th>
				  
				  <th scope="col">Via residenza</th>
				  <th scope="col">Civico residenza</th>
				  <th scope="col">CAP residenza</th>
				  <th scope="col">Comune residenza</th>
				  <th scope="col">Provincia residenza</th>
				  <th scope="col">Regione residenza</th>
				  <th scope="col">Stato residenza</th>
				  
				  <th scope="col">Via domicilio</th>
				  <th scope="col">Civico domicilio</th>
				  <th scope="col">CAP domicilio</th>
				  <th scope="col">Comune domicilio</th>
				  <th scope="col">Provincia domicilio</th>
				  <th scope="col">Regione domicilio</th>
				  <th scope="col">Stato domicilio</th>
				  
				  <th scope="col">Email</th>
				  <th scope="col">Telefono</th>
                </tr>
              </thead>
              <tbody>
			  <?php 
			  $progressivo=1;
			  foreach($persone as $persona){
			  ?>
                <tr>
                  <th scope="row"><?=$progressivo++;?></th>
			  	  
                  <td><?=$persona->getCognome(); ?></td>
				  <td><?=$persona->getNome(); ?></td>
				  <td><?=$persona->getDataNascita(); ?></td>
				  <td><?=$persona->getCodiceFiscale(); ?></td>
				  
				  
				  <td><?=$persona->getIndirizzoResidenza()->getVia(); ?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getCivico(); ?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getCap(); ?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getComune()->getNome(); ?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getComune()->getProvincia(); ?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getComune()->getRegione(); ?></td>
				  <td><?=$persona->getIndirizzoResidenza()->getComune()->getStato(); ?></td>
				  
				  <td><?=$persona->getIndirizzoDomicilio()->getVia(); ?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getCivico(); ?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getCap(); ?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getComune()->getNome(); ?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getComune()->getProvincia(); ?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getComune()->getRegione(); ?></td>
				  <td><?=$persona->getIndirizzoDomicilio()->getComune()->getStato(); ?></td>
				  
				  <td><?=$persona->getEmail(); ?></td>
				  <td><?=$persona->getTelefono(); ?></td>
				
                  
                </tr>
				
				<?php
			    }
				?>
				
                <!--tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                </tr-->
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