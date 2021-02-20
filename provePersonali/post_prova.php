<?php $s = session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php if(!isset($_SESSION["username"])) { ?>
        <meta http-equiv="refresh" content="5;url=formProva.php">
        <?php } ?>
        <title>Pagina</title>
    </head>
    <body>
    	<?php if(!isset($_SESSION["username"])) { ?>
    		<h1>Non sei loggato, non puoi visualizzare la pagina.<br>
Verrai reindirizzato alla pagina di login fra 5 secondi.</h1>
        <?php } else { ?>
			<h1>Pagina</h1>
			<?php 
				$username = $_SESSION["username"];
				echo "Utente loggato con username '$username'<br>";
				echo "ID della sessione: " . session_id() . "<br>";
		} ?>
    </body>
</html>
<?php 
	$_SESSION = array();
	session_destroy();
?>
