<?php
$connessione = new PDO("mysql:host=localhost;dbname=test", "root", null);
$query_sql = "SELECT * FROM persone";
$records = $connessione->query($query_sql);
foreach($records as $r) {
	echo $r['id'] . " " . $r['cognome'] . " " . $r['nome'] . " " . $r['codice_fiscale'] . "<br>";
}
?>