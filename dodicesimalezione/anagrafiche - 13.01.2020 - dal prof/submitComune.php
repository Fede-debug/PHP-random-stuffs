<?php
session_start();
$errori = [];

require_once 'Persona.php';
require_once 'Indirizzo.php';
require_once 'ComuneController.php';
require_once 'PersonaController.php';


if(!isset($_POST['nome_comune']) || empty(trim($_POST['nome_comune']))) {
	$errori['nome'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['provincia_comune']) || empty(trim($_POST['provincia_comune']))) {
	$errori['nome'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['regione_comune']) || empty(trim($_POST['re']))) {
	$errori['nome'] = "Il campo non pu&ograve; essere vuoto";
}
if(!isset($_POST['nome']) || empty(trim($_POST['nome']))) {
	$errori['nome'] = "Il campo non pu&ograve; essere vuoto";
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

PersonaController::aggiungiPersona($persona);

header("location: index.php");
exit;

?>