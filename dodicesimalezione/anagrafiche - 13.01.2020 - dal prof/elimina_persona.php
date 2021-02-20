<?php
require_once 'PersonaController.php';

if(!isset($_GET['id']) || empty(trim($_GET['id']))) {
	exit("ID non pervenuto");
}

$id = trim($_GET['id']);
$persona = PersonaController::dettaglioPersona($id);

PersonaController::eliminaPersona($persona);

header("location: index.php");
exit;
?>
