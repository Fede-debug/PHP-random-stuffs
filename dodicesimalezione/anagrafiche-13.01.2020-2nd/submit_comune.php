<?php
session_start();
$errori = [];

//require_once 'Persona.php';
//require_once 'Indirizzo.php';
require_once 'ComuneController.php';
//require_once 'PersonaController.php';


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
	header("location: form_nuovo_comune.php");
	exit;
}

$comune = new Comune;
$comune->setNome(trim($_POST['nome']));
$comune->setProvincia(trim($_POST['provincia']));
$comune->setRegione(trim($_POST['regione']));
$comune->setStato(trim($_POST['stato']));



ComuneController::aggiungiComune($comune);

header("location: lista_comuni.php");
exit;

?>