<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Write data to file</title>
    </head>
	<body>
		<?php
			if(isset($_POST['nome']) && isset($_POST['cognome'])  && isset($_POST['mail'])){
				if(!empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['mail'])){
					
					$f1=fopen('anagrafica.csv','a+');
				
				    $nome=$_POST['nome'];
					$cognome=$_POST['cognome'];
					$mail=$_POST['mail'];
					
					$riga= $nome . ";" . $cognome . ";" . $mail . PHP_EOL;
				
					/*fwrite($f1,$_POST['nome']);
					fwrite($f1,';');
					fwrite($f1,$_POST['cognome']);
					fwrite($f1,';');
					fwrite($f1,$_POST['mail']);
					fwrite($f1,PHP_EOL);
					*/
					$arrayanagrafica=explode(";",$riga);
					print_r($arrayanagrafica);
					echo "<br>";
					
					echo (fwrite($f1,$riga)) ? "Dati aggiunti in anagrafica.csv" : "Impossibile scrivere sul file";
					fclose($f1);
					echo "<br>";
					
					/*
					$f1=fopen('anagrafica.csv','r');
					
					$riga=fgets($f1);
					$arrayanagrafica=explode(";",$riga);
					
					print_r($arrayanagrafica);
					fclose($f1);
					*/
						
				} else {
					
					exit("Tutti i campi sono obbligatori");
				
				}
			} else {
				exit("<b> Si sono verificati degli errori nei parametri </b>");
			}
			
			
		?>
		<br>
		<a href="formAnagrafica.php" target="_blank">Torna al form</a>
		<br>
		<a href="contenuto_anagrafica.php" target="_blank">Visualizza tabella</a>
		
		
	</body>
<html>	