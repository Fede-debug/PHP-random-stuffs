<?php
session_start();
$errori = [];

//require_once 'Persona.php';
//require_once 'Indirizzo.php';
require_once 'ComuneController.php';
//require_once 'PersonaController.php';

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

/*
$indirizzoResidenza = new Indirizzo;
$indirizzoResidenza->setVia(trim($_POST['via_residenza']));
$indirizzoResidenza->setCivico(trim($_POST['civico_residenza']));
$indirizzoResidenza->setCap(trim($_POST['cap_residenza']));

$comuneResidenza = ComuneController::dettaglioComune(trim($_POST['id_comune_residenza']));
$indirizzoResidenza->setComune($comuneResidenza);

$persona->setIndirizzoResidenza($indirizzoResidenza);

$indirizzoDomicilio = new Indirizzo;
$indirizzoDomicilio->setVia(trim($_POST['via_domicilio']));
$indirizzoDomicilio->setCivico(trim($_POST['civico_domicilio']));
$indirizzoDomicilio->setCap(trim($_POST['cap_domicilio']));

$comuneDomicilio = ComuneController::dettaglioComune(trim($_POST['id_comune_domicilio']));
$indirizzoDomicilio->setComune($comuneDomicilio);

$persona->setIndirizzoDomicilio($indirizzoDomicilio);

$persona->setEmail(trim($_POST['email']));
$persona->setTelefono(trim($_POST['telefono']));

PersonaController::aggiornaPersona($persona);
*/
//print_r($comune);


ComuneController::aggiornaComune($comune);

header("location: lista_comuni.php");
exit;

?>