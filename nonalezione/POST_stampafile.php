<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Dati file</title>
    </head>
	<body>
		<?php
		
			if (!isset($_FILES["carica"]) || !is_uploaded_file($_FILES["carica"]["tmp_name"])) {
				  exit("<b> Nesun file inviato </b>");    
			}
			
			echo "Errore: " . $_FILES["carica"]["error"] . "<br>";
			echo "File: " . $_FILES["carica"]["name"] . "<br>";
			echo "Type: " . $_FILES["carica"]["type"] . "<br>";
			$dimensione = ($_FILES["carica"]["size"] / 1024);
			echo "Dimensione: $dimensione Kb<br>"; 
			echo "Salvato in: " . $_FILES["carica"]["tmp_name"] . "<br>";
			$name=$_FILES["carica"]["name"];
			$sorgente = $_FILES["carica"]["tmp_name"];
			$tipoFile=$_FILES["carica"]["type"];
			
			$destinazione= "files/" . $name;
			
			
				
			
			
			                                          
			if(!move_uploaded_file($sorgente,$destinazione )){                       
					
				echo "Impossibile salvare il file in $destinazione <br>";                
			} else {
			
				if(!file_exists($destinazione)){
					exit("impossibile leggere file");
					
				}
				
				echo "File salvato in $destinazione <br>";
				
				if($tipoFile !== "text/plain"){
					unlink($destinazione);
					exit("Non è un file di testo ed &egrave; stato cancellato <br>");
					// cancello file se non è un plain text
			}
				
			?>
				<h1><?=$name?></h1>
			<?php
				
				
				echo "<p>";
				/*
				$f1=fopen($destinazione,'r');
				while(!feof($f1)){
					$line=fgets($f1);
					echo "$line <br>";       //stampa file riga per riga mantenendo la formattazione
					// potei usare anche una file_get_contents con un explode
				}
				*/
				
				$contenutoFile=file_get_contents($destinazione);
				$arrayFile=explode(PHP_EOL,$contenutoFile);
				//print_r($arrayFile);
				foreach($arrayFile as $riga){
					echo $riga . "<br>";
				}
				
				echo "</p>";
			
			}
			
			
			
		?>
		
	</body>
</html>