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
						echo "<b> Login ok </b>";
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