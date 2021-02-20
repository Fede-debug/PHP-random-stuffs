<?php 
	$s = session_start();
	if( isset($_POST["username"]) && isset($_POST["password"]) ) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if ($username === "admin" && $password === "admin") {
			$_SESSION["username"] = $username;
			header("location: paginaReindirizza.php");
			exit();
		} else {
			$_SESSION["errore_login"] = "Credenziali mancanti o non corrette, riprova!"; 
		} 
	} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
    </head>
    <body>			
		<h1>Form di Login</h1>
		<form id="login_form" method="post" >
			<label for="username">Username</label>
			<input type="text" name="username"></input>
			<br>
			<label for="password">Password</label>
			<input type="password" name="password"></input>
			<br>
			<?php 
				if( isset($_SESSION["errore_login"]) ) { ?>
					<br>
					<em><?=$_SESSION["errore_login"]?><br><em>
			<?php 
					unset($_SESSION["errore_login"]); 
				}  ?>
			<br>
			<input type="submit" value="Login" />
		</form>	
    </body>
</html>
