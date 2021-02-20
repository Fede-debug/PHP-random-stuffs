<?php
session_start();
$errori = [];

require_once 'Persona.php';
require_once 'Indirizzo.php';
require_once 'Comune.php';
require_once 'PersonaController.php';

if(!isset($_POST['cognome']) || empty(trim($_POST['cognome']))) {
	$errori['cognome'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['nome']) || empty(trim($_POST['nome']))) {
	$errori['nome'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['data_nascita']) || empty(trim($_POST['data_nascita']))) {
	$errori['data_nascita'] = "Il campo non pu&ograve; essere vuoto";
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
if(!isset($_POST['comune_residenza']) || empty(trim($_POST['comune_residenza']))) {
	$errori['comune_residenza'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['provincia_residenza']) || empty(trim($_POST['provincia_residenza']))) {
	$errori['provincia_residenza'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['regione_residenza']) || empty(trim($_POST['regione_residenza']))) {
	$errori['regione_residenza'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['stato_residenza']) || empty(trim($_POST['stato_residenza']))) {
	$errori['stato_residenza'] = "Il campo non pu&ograve; essere vuoto";
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
if(!isset($_POST['comune_domicilio']) || empty(trim($_POST['comune_domicilio']))) {
	$errori['comune_domicilio'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['provincia_domicilio']) || empty(trim($_POST['provincia_domicilio']))) {
	$errori['provincia_domicilio'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['regione_domicilio']) || empty(trim($_POST['regione_domicilio']))) {
	$errori['regione_domicilio'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['stato_domicilio']) || empty(trim($_POST['stato_domicilio']))) {
	$errori['stato_domicilio'] = "Il campo non pu&ograve; essere vuoto";
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
	header("location: form.php");
	exit;
}

$persona = new Persona;
$persona->setCognome(trim($_POST['cognome']));
$persona->setNome(trim($_POST['nome']));
$persona->setDataNascita(trim($_POST['data_nascita']));
$persona->setCodiceFiscale(trim($_POST['codice_fiscale']));

$indirizzoResidenza = new Indirizzo;
$indirizzoResidenza->setVia(trim($_POST['via_residenza']));
$indirizzoResidenza->setCivico(trim($_POST['civico_residenza']));
$indirizzoResidenza->setCap(trim($_POST['cap_residenza']));

$comuneResidenza = new Comune;
$comuneResidenza->setNome(trim($_POST['comune_residenza']));
$comuneResidenza->setProvincia(trim($_POST['provincia_residenza']));
$comuneResidenza->setRegione(trim($_POST['regione_residenza']));
$comuneResidenza->setStato(trim($_POST['stato_residenza']));

$indirizzoResidenza->setComune($comuneResidenza);

$persona->setIndirizzoResidenza($indirizzoResidenza);

$indirizzoDomicilio = new Indirizzo;
$indirizzoDomicilio->setVia(trim($_POST['via_domicilio']));
$indirizzoDomicilio->setCivico(trim($_POST['civico_domicilio']));
$indirizzoDomicilio->setCap(trim($_POST['cap_domicilio']));

$comuneDomicilio = new Comune;
$comuneDomicilio->setNome(trim($_POST['comune_domicilio']));
$comuneDomicilio->setProvincia(trim($_POST['provincia_domicilio']));
$comuneDomicilio->setRegione(trim($_POST['regione_domicilio']));
$comuneDomicilio->setStato(trim($_POST['stato_domicilio']));

$indirizzoDomicilio->setComune($comuneDomicilio);

$persona->setIndirizzoDomicilio($indirizzoDomicilio);

$persona->setEmail(trim($_POST['email']));
$persona->setTelefono(trim($_POST['telefono']));

PersonaController::aggiungiPersona($persona);

header("location: index.php");
exit;

?>