<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Check Username e Password</title>
    </head>
	<body>
		<?php
			
			if(isset($_POST["Username"]) && isset($_POST["Password"])){
				if(!empty($_POST["Username"]) && !empty($_POST["Password"])){
					
					$username=$_POST["Username"];
					//$username=strtolower($username);
					$password=$_POST["Password"];
					
					if(strcasecmp($username,'amministratore') == 0 && $password=="abracadabra"){
						
						if(isset($_POST['sex'])){
							$sesso=$_POST['sex'];
							$messaggio = "Benvenut" . (($sesso=='M') ? "o" : "a") . " nella tua pagina di login "; 
							$messaggio = str_replace(" ", "<br>", $messaggio);
							echo "<b> $messaggio </b><br>";
						}  else {
							$messaggio = "Login ok (sesso non specificato) <br>";
							echo "<b> $messaggio </b><br>";
						}
						
						echo "Verdura preferita: <br>";
						
						for($i=0; $i<4; $i++) {
						if(isset($_POST[$i])) {
							echo "<b>" . $_POST[$i] . "</b> ";
							}
						}
						
						echo "<br><br>";
					
						if(isset($_POST['umore'])){
							$umore=$_POST['umore'];
							
							$umoriArray=file('umori.csv');       //ogni elemento dell'array è una riga del file
							foreach($umoriArray as $riga){
								
								$arrayRiga=explode(";",$riga);   //array di due valori value-umore
								$umoriEtichetta[$arrayRiga[0]]=$arrayRiga[1]; 	//associa valore all'etichetta leggendo i file
																						// vettore i cui indici sono i value e valore gli umori
																						// (vedi umori.csv)
							}
							
							echo "Il tuo umore &egrave; $umoriEtichetta[$umore] <br><br>";  
						}
						
						// stampa cibi preferiti - scelta multipla
						if(isset($_POST["cibi"])) {
							$listaCibi = file("cibi.csv");
							$arrayCibi = [];
							foreach($listaCibi as $rigaCibi) {
								$datiCibo = explode(";", $rigaCibi);
								$arrayCibi[$datiCibo[0]] = $datiCibo[1];   // stessa cosa di prima
						}
						$cibi = $_POST["cibi"];
						//var_dump($cibi);
						//var_dump($arrayCibi);
						echo "Cibi preferiti:<br>";
						foreach($cibi as $item) {
							//echo $item;
							echo $arrayCibi[$item] . " ";
						}
					}
						// aggiungi verdure preferite (magari con un for con indice)
						
					} else {
						echo "<b> Dati errati </b>";
					}
				} else
				{
					echo "Non lasciare i campi vuoti";
					
				}
				
			}
			
		?>
		<br>
		<a href="formUsernamePassword.php" target="_blank">Torna al form</a>
		
		
	</body>
<html>	