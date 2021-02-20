<!DOCTYPE html>
<html>	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sess2</title>
	</head>
	
	<body>
		<pre>

<?php
session_start();
echo "la sessione si chiama <b> " . session_id() . "</b> <br>";

print_r($_SESSION);
//var_dump($_SESSION);
echo "{$_SESSION['nome']}  <br>";      //utilizzo direttamente da session
$utenti=$_SESSION['users'];     //sposto in una variabile 
print_r($utenti);   

$_SESSION=[];               //dovrebbero essere equivalenti perchè faccio unset su tutto l'array
//unset($_SESSION);           //pulisco in modo che cambiano sess1.php sovrascrive intero vettore
							//meglio $_SESSION=[]; perché opero su intero vettore

//se ricarico sess2.php il vettore è vuoto  

$pippo= ['a','b','c','d','e','f','g']; 
print_r($pippo);
unset($pippo[2]); //cancello c da pippo (gli indici non vengono riorganizzati come in array_splice)

print_r($pippo);
//unset($pippo); // cancello tutto (come $pippo = []; però in quel caso l'array viene ricreato vuoto )  
$pippo=[];  // meglio perché unset conviene solo per array associativi e su singoli valori!

print_r($pippo);    //da errore con unset($pippo ) perché $pippo non esiste più! 

//session_destroy();  //distruggo la sessione dopo che mando a schermo sess2


?>

		</pre>
		<a href="sess1.php">Ritorna in sess1...</a>
	</body>
</html>	

<?php
		session_destroy(); // non funziona?
?>