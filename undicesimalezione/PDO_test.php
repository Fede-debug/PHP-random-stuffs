<?php
$dsn = "mysql:host=localhost;dbname=esempi";
$username = "root";
$password = null;
$connessione = new PDO( $dsn, $username, $password );
$connessione->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );   
$resultset = $connessione->query("SELECT * FROM persone"); // restituisce oggetto di classe PDOStatement
var_dump($resultset);   //oggetto 
if(!$resultset) {  
	print_r($connessione->errorInfo());
	exit("Errore, campo o tabella inesistenti!");  
} 

//echo PHP_EOL;
foreach($resultset as $record) {         //ciclo sull'ogetto risultato della query
	
	echo $record['codice_fiscale'] . " ". $record['nome'] ." ". $record['cognome'];  //. PHP_EOL;     //stampo valori dell'oggetto in un foreach
	// array associativo 
} 


//meglio usare il metodo fetch 
while($record= $resultset->fetch()){
	echo $record['codice_fiscale'] . " ". $record['nome'] ." ". $record['cognome'] ;
	echo $record[3] . " ". $record[2] ." ". $record[1] ;  //si può fare anche così ($record[0] è l'id)
	//both è l'attributo predefinito di fetch
}
?>