<!DOCTYPE html>
<html>	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sess1</title>
	</head>
	
	<body>

<?php
session_start();                               //usare prima di qualsiasi istruzione
echo "la sessione si chiama <b> " . session_id() . "</b> <br>";

$_SESSION['nome'] = 'John';
echo( $_SESSION['nome'] );
$utenti = array( 'Nome' =>   'John', 'Cognome' =>  'Smith', 'Eta' => 34 );
$_SESSION['users'] = $utenti;
?>

<br>
<a href="sess2.php">Vedi restanti valori...</a>


	</body>
</html>