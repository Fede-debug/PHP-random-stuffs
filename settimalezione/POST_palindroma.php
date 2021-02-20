<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Check palindroma</title>
    </head>
	<body>
		<?php
			//print_r($_POST);
			if(isset($_POST["testopal"])){
				if(!empty($_POST["testopal"])){
					$stringaInvertita=strrev($_POST["testopal"]);
					echo "la stringa immessa <b> " . $_POST['testopal'] . (($stringaInvertita==$_POST['testopal']) ? " </b> &egrave; " : " </b> NON &egrave; " ). "palindroma";
			    }  else  {
					echo "il valore non può essere vuoto";
				   }
			    //sarebbe meglio tirare fuori il $_POST["testopal"] sennò si incasina con la stringa dentro l'echo
			    // tipo $stringaOriginale=$_POST['testopal']
				//controlla
			}
		?>
		<br>
		<a href="formpalindroma.php" target="_blank">Torna al form</a>
	<body>
</html>	