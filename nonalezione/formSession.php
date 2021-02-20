<?php
			$session=session_start();
			echo "identificativo sessione: " . session_id() . "<br><br>";
?>
		

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nome Cognome indirizzo</title>
    </head>
	<body>
		<form id="upload" method="POST"  enctype="multipart/form-data">
			
			<label for="directory">Nome</label>
			<br><br>
			<input type="text" name="name">
			<br><br>
			<label for="directory">Cognome</label>
			<br><br>
			<input type="text" name="surname">
			<br><br><label for="directory">Indirizzo</label>
			<br><br>
			<input type="text" name="address">
			<br><br>
			
			<input type="submit" value="Click to send" />	
		</form>	
		
		<a href="stampaSession.php" target="_blank">Recupera sessione</a>
		
<?php

		if(isset($_POST['name']) && !empty($_POST['name'])) {
		   $_SESSION['nome']=$_POST['name'];
		   //unset($_SESSION['nome']);
		   header("location: stampaSession.php");
		   exit;
		}
		if(isset($_POST['surname']) && !empty($_POST['surname'])){
		   $_SESSION['cognome']=$_POST['surname'];
		}
		if(isset($_POST['address']) && !empty($_POST['address'])){
		   $_SESSION['indirizzo']=$_POST['address'];
		   //header("location: stampaSession.php");
		   //exit;
		}


		
?>		
		
		
			
		
	</body>
</html>	