<?php


			$session=session_start();
			echo "identificativo sessione: " . session_id() . "<br><br>";
			
			
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Stampa session</title>
    </head>
	<body>
		<?php
			print_r($_SESSION);  //meglio anche un check unset in modo che la sessione non 'trascini' dati vecchi
			
			
			
			if(isset($_SESSION['nome'])){
				unset($_SESSION['nome']);
			}
			else {
				?><h1>Utente non settato, redirect al form in 5 secondi</h1><?php
				header("refresh:5;url=formSession.php");  //rimando al form se nome non esiste
			}                                           //in teoria non si può fare stando alla documentazione...
			
			
			
			if(isset($_SESSION['cognome']))
				unset($_SESSION['cognome']);
			
			if(isset($_SESSION['indirizzo']))
				unset($_SESSION['indirizzo']);
			
			
		?>	
	</body>
</html>	