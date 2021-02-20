<?php
session_start();
$errori = [];

require_once 'Persona.php';
require_once 'Indirizzo.php';
require_once 'ComuneController.php';
require_once 'PersonaController.php';

if(!isset($_POST['id']) || empty(trim($_POST['id']))) {
	exit('Il campo ID non è pervenuto');
}

$id=trim($_POST['id']);

if(!isset($_POST['cognome']) || empty(trim($_POST['cognome']))) {
	$errori['cognome'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['nome']) || empty(trim($_POST['nome']))) {
	$errori['nome'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['data_nascita']) || empty(trim($_POST['data_nascita']))) {
	$errori['data_nascita'] = "Il campo non pu&ograve; essere vuoto";
}

if(!isset($_POST['codice_fiscale']) || empty(trim($_POST['codice_fiscale']))) {
	$errori['codice_fiscale'] = "Il campo non pu&ograve; essere vuoto";
} else if(strlen($_POST['codice_fiscale']) !== 16 ) {
	$errori['codice_fiscale'] = "Il campo deve contenere 16 caratteri";
}

if(!isset($_POST['via_residenza']) || empty(trim($_POST['via_residenza']))) {
	$errori['via_residenza'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['civico_residenza']) || empty(trim($_POST['civico_residenza']))) {
	$errori['civico_residenza'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['cap_residenza']) || empty(trim($_POST['cap_residenza']))) {
	$errori['cap_residenza'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['id_comune_residenza']) || empty(trim($_POST['id_comune_residenza']))) {
	$errori['id_comune_residenza'] = "Il campo non pu&ograve; essere vuoto";
}

if(!isset($_POST['via_domicilio']) || empty(trim($_POST['via_domicilio']))) {
	$errori['via_domicilio'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['civico_domicilio']) || empty(trim($_POST['civico_domicilio']))) {
	$errori['civico_domicilio'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['cap_domicilio']) || empty(trim($_POST['cap_domicilio']))) {
	$errori['cap_domicilio'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['id_comune_domicilio']) || empty(trim($_POST['id_comune_domicilio']))) {
	$errori['id_comune_domicilio'] = "Il campo non pu&ograve; essere vuoto";
}

if(!isset($_POST['email']) || empty(trim($_POST['email']))) {
	$errori['email'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['telefono']) || empty(trim($_POST['telefono']))) {
	$errori['telefono'] = "Il campo non pu&ograve; essere vuoto";
}

$_SESSION['errori'] = $errori;

if(!empty($errori)) {
	$_SESSION['old'] = $_POST;
	header("location: modifica_persona.php?id=$id");
	exit;
}

$persona = PersonaController::dettaglioPersona($id);
$persona->setCognome(trim($_POST['cognome']));
$persona->setNome(trim($_POST['nome']));
$persona->setDataNascita(trim($_POST['data_nascita']));
$persona->setCodiceFiscale(trim($_POST['codice_fiscale']));

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

header("location: index.php");
exit;

?>