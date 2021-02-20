<html>
	<body>
	<?php
	if(isset($_POST["username"]) && isset($_POST["password"])) {
		if(!empty($_POST["username"]) && !empty($_POST["password"])) {
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			if( strcasecmp($username, 'amministratore') == 0 && $password == "abracadabra" ) {
				
				if(isset($_POST["sesso"])) {
					//echo $_POST["sesso"]; 
					
					$messaggio = "Benvenut".( ($_POST["sesso"] == "M") ? "o" : "a" )." nella tua pagina iniziale, buon proseguimento.";
				
					$messaggio = str_replace(" ", "<br>", $messaggio);
				
					echo $messaggio . "<br>";
					
					for($i=0; $i<4; $i++) {
						if(isset($_POST[$i])) {
							echo $_POST[$i] . " ";
						}
					}
					
					echo "<br>";
					
					if(isset($_POST["umore"])) {
						echo "Umore: ";
						$righe = file("umori.csv");
						$umori=[];
						foreach($righe as $riga) {
							$dati = explode(";", $riga);
							$umori[$dati[0]] = $dati[1];
							
							//if($dati[0] == $_POST["umore"]) {
							//	echo $dati[1];
							//}
							
						}
						//echo $_POST["umore"];
						
						echo $umori[$_POST["umore"]];
					}
					echo "<br>";
					if(isset($_POST["cibi"])) {
						$listaCibi = file("cibi.csv");
						$arrayCibi = [];
						foreach($listaCibi as $c ) {
							$datiCibo = explode(";", $c);
							$arrayCibi[$datiCibo[0]] = $datiCibo[1];
						}
						$cibi = $_POST["cibi"];
						echo "Cibi preferiti:<br>";
						foreach($cibi as $cibo) {
							echo $arrayCibi[$cibo] . " ";
						}
					}
						
				}	
				
			} else {
				echo "Credenziali non corrette";
			}
			
			/*
			
			$username = strtolower($username);
			
			if( $username == "amministratore" && $password == "abracadabra" ) {
				echo "Credenziali corrette";
			} else {
				echo "Credenziali non corrette";
			}
			*/
			
			/*
			
			$username = strtoupper($username);
			
			if( $username == "AMMINISTRATORE" && $password == "abracadabra" ) {
				echo "Credenziali corrette";
			} else {
				echo "Credenziali non corrette";
			}
			*/
			
			
			
		} else {
			echo "Username e password non possono essere vuoti";
		}
	} else {
		echo "Errore nei parametri username e password";
	}
	?>

	</body>
</html>