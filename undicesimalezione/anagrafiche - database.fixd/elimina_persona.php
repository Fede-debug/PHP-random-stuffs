<?php

require_once "PersonaController.php";

if(!isset($_GET['id']) || empty($_GET['id'])){
	exit("id non presente");
	
}
$id= $_GET['id'];

$persona=PersonaController::dettaglioPersona($id);

PersonaController::eliminaPersona($persona);

