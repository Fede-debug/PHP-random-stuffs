<?php
session_start();
$errori = [];

require_once 'ComuneController.php';

if(!isset($_POST['id']) || empty(trim($_POST['id']))) {
	exit('Il campo ID non è pervenuto');
}

$id=trim($_POST['id']);

if(!isset($_POST['nome']) || empty(trim($_POST['nome']))) {
	$errori['nome'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['provincia']) || empty(trim($_POST['provincia']))) {
	$errori['provincia'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['regione']) || empty(trim($_POST['regione']))) {
	$errori['regione'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['stato']) || empty(trim($_POST['stato']))) {
	$errori['stato'] = "Il campo non pu&ograve; essere vuoto";
}

$_SESSION['errori'] = $errori;

if(!empty($errori)) {
	$_SESSION['old'] = $_POST;
	header("location: modifica_comune.php?id=$id");
	exit;
}

$comune = ComuneController::dettaglioComune($id);
$comune->setNome(trim($_POST['nome']));
$comune->setProvincia(trim($_POST['provincia']));
$comune->setRegione(trim($_POST['regione']));
$comune->setStato(trim($_POST['stato']));

ComuneController::aggiornaComune($comune);

header("location: comuni.php");
exit;

?>