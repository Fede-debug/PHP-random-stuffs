<html>
	<body>
		<?php
		if( isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["citta"]) && isset($_POST["email"])) {
			if(!empty($_POST["nome"]) && !empty($_POST["cognome"]) && !empty($_POST["citta"]) && !empty($_POST["email"])) {
				$nome = $_POST["nome"];
				$cognome = $_POST["cognome"];
				$citta = $_POST["citta"];
				$email = $_POST["email"];
				
				$f = fopen("contatti.csv", "a+");
				
				$riga = $nome . ";" . $cognome . ";" . $citta . ";" . $email . PHP_EOL; // . "\n";
				
				fwrite($f, $riga);
				fclose($f);
				
				
			} else {
				exit("Tutti i campi sono obbligatori");
			}
		} else {
			exit("Si sono verificati errori nei parametri.");
		}
		?>

		<a href="index.html">Tornare al form di inserimento anagrafica</a>
		<br>
		<a href="lista.php">Mostra contenuto anagrafiche</a>
	</body>
</html>
