<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Form palindroma</title>
    </head>
	<body>
		<h3>Form check palindroma</h3>
		
		<form id="palindroma" method="POST" action="../settimalezione/POST_palindroma.php">
			<label for="testopal">Inserire una stringa palindroma</label>
			<br>
			<input type="text" name="testopal" />
			
			<br><br>
			
			<input type="submit" value="Invia stringa" />
		</form>
	</body>
<html>	