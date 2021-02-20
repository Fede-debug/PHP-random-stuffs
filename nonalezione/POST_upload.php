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
			
			/*
			$arrayNomeFile=[]; //inizializzo
			$arrayNomeFile=explode(".",$_FILES["carica"]["name"]);
			//$estensione=array_pop($arrayNomeFile);  //posso usare l'ultimo indice
			$estensione=$arrayNomeFile[count($arrayNomeFile)-1];
			//$nomeFileNoExt=implode(".",$arrayNomeFile);  //rifare eventualmente con un ciclo for vv
			//$random=rand(0,2000);                         //oppure con strrpos e substr_replace
			//print_r($_POST['carica']);
			
			$nomeFileNoExt="";
			
			for($i=0;$i<(count($arrayNomeFile)-1);$i++){
				if($i<(count($arrayNomeFile))-2)
					$nomeFileNoExt.= $arrayNomeFile[$i] . ".";
				else
					$nomeFileNoExt.= $arrayNomeFile[$i]; //evito di aggiungere l'ultimo punto
					
				
			}
			
			*/
			
			
			$sorgente = $_FILES["carica"]["tmp_name"];
			//$destinazione = "./files/" . $nomeFileNoExt . rand(0,20000) . "." .$estensione;
			$destinazione= "files/" . $name;
			
			
			if(!file_exists($destinazione)){                                           //controlla con il while del prof 
				if(move_uploaded_file($sorgente,$destinazione )){                       // in modo che non concateni più numeri
					
					echo "File definitivo salvato in $destinazione <br>";                //se il file non esiste lo carica con il nome originale
				}   else {
						echo "Non è stato possibile scrivere il file <br>";
				}
				
				
			} else {
				//echo "File già esistente <br>";
				do {
				$posUltimoPunto=strrpos($name,".");
				$nameRandom=substr_replace($name, rand(0,20000) . substr($name,$posUltimoPunto), $posUltimoPunto);
				$destinazione= "files/" .$nameRandom;  //funziona solo se la cartella esiste già (oppure si può fare un mkdir)
				}while(file_exists($destinazione));  //faccio in modo che se per caso il file con numero esiste già
														// crei un altro numero
				
				if(move_uploaded_file($sorgente,$destinazione )){
					echo "File definitivo salvato in $destinazione <br>";
			}  else {
				echo "Non è stato possibile scrivere il file <br>";
			}
			
				
			}
		?>
		
	</body>
</html>