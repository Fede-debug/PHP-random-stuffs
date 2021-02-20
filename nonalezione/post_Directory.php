<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Dati file in cartella</title>
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
			
			$directory=$_POST['directory'] . "/";
			
			if(!isset($directory) || empty(trim($directory))){  //se per sbbaglio metto spazi vuoti
				exit("<b> Nome cartella non ricevuto </b>");  // non funziona
				
			}
			
			//$directory=$_POST['directory'] . "/";
			
			//var_dump($_FILES['directory']);
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
			
			
			
			if(file_exists($directory)){
				$destinazione=$directory . $name;
				while(file_exists($destinazione)){
					$posUltimoPunto=strrpos($name,".");
					$nameRandom=substr_replace($name,"",$posUltimoPunto) . rand(0,20000) . substr($name,$posUltimoPunto);  //anche qui aggiunge random 
																															//invece di sostituirlo
																															// e se c'è il file finale lo
																															// sovrascrive!
					$destinazione= $directory . $nameRandom;  //funziona solo se la cartella esiste già (oppure si può fare un mkdir)
				}
				if(move_uploaded_file($sorgente,$destinazione )){
					echo "File definitivo salvato in $destinazione <br>";
				}
				
				
			}  else {
				if(!mkdir($directory,0777,true)){
					exit("impossibile creare la cartella");
				}
					
				$destinazione=$directory . $name;
				if(move_uploaded_file($sorgente,$destinazione )){                       
					echo "File definitivo salvato in $destinazione <br>";                
				}
				
			}
			
			/*
			//$destinazione = "./files/" . $nomeFileNoExt . rand(0,20000) . "." .$estensione;
			$destinazione= "files/" . $name;
			
			
			if(!file_exists($destinazione)){                                           //controlla con il while del prof 
				if(move_uploaded_file($sorgente,$destinazione )){                       // in modo che non concateni più numeri
					
					echo "File definitivo salvato in $destinazione <br>";                //se il file non esiste lo carica con il nome originale
				}
				
			} else {
				//echo "File già esistente <br>";
				$posUltimoPunto=strrpos($name,".");
				$nameRandom=substr_replace($name,"",$posUltimoPunto) . rand(0,20000) . substr($name,$posUltimoPunto);
				$destinazione= "files/" .$nameRandom;  //funziona solo se la cartella esiste già (oppure si può fare un mkdir)
				if(move_uploaded_file($sorgente,$destinazione )){
					echo "File definitivo salvato in $destinazione <br>";
				}
				
			}
			*/
		?>
		
	</body>
</html>