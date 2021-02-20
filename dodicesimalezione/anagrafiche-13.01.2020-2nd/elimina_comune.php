<?php
require_once 'ComuneController.php';

if(!isset($_GET['id']) || empty(trim($_GET['id']))) {
	exit("ID non pervenuto");
}

$id = trim($_GET['id']);
$comune = ComuneController::dettaglioComune($id);

ComuneController::eliminaComune($comune);

header("location: lista_comuni.php");
exit;
?>