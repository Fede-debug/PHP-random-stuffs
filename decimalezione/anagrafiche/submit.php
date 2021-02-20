<?php

session_start();
$errori = [];

if(!isset($_POST['cognome']) || empty(trim($_POST['cognome']))){
	$errori['cognome']= "il campo non  pu&ograve; essere vuoto";
}

$_SESSION['errori'] = $errori;

if(!empty($errori)){
	$_SESSION['errori'] = $errori;
	header("Location: form.php");
	exit;
}

?>