<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Upload file in dir</title>
    </head>
	<body>
		<form id="upload" method="POST" action="POST_Directory.php" enctype="multipart/form-data">
			
			<label for="directory">Nome Cartella</label>
			<br><br>
			<input type="text" name="directory">
			<br><br>
			<label for="carica">Invia file</label>
			<br><br>
			<input type="file" name="carica" id="12ty" />
			<br><br>
			
			<input type="submit" value="Click to send" />	
		</form>	
			
		
	</body>
</html>	