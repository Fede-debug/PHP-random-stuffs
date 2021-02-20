<?php 
require_once 'ComuneController.php';

$comuni = ComuneController::caricaComuni();
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
          <h1 class="">Comuni</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
	<div class="row">
        <div class="col-md-12">
			<a class="btn btn-primary" href="form_nuovo_comune.php">Nuovo Comune</a>
		</div>
	</div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
				<tr>
                  <th>#</th>
                  <th>Comune</th>
                  <th>Provincia</th>
				  <th>Regione</th>
				  <th>Stato</th>

				  <th>Azioni</th>
                </tr>
              </thead>
              <tbody>
			   <?php
				
				foreach($comuni as $comune) {
				?>
                <tr>
                  <th><?=$comune->getId();?></th>
                  <td><?=$comune->getNome()?></td>
                  <td><?=$comune->getProvincia();?></td>
				  <td><?=$comune->getRegione();?></td>
				  <td><?=$comune->getStato();?></td>
				 
				  <td><a class="btn btn-primary" href="modifica_comune.php?id=<?=$comune->getId();?>">Modifica</a>&nbsp;
				  	  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confermaEliminaComune_<?=$comune->getId()?>">Elimina</button>
				  </td>
	
				  <div class="modal" tabindex="-1" role="dialog" id="confermaEliminaComune_<?=$comune->getId()?>">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title">Conferma eliminazione</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<p>Confermi di voler eliminare il comune?</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
						<a class="btn btn-danger" href="elimina_comune.php?id=<?=$comune->getId();?>">Elimina</a>
					  </div>
					</div>
				  </div>
				</div>
				  
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