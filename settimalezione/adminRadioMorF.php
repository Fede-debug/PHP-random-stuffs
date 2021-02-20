<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Form username and password</title>
    </head>
	<body>
		<h3>Inserisci Username e Password</h3>
		
		<form id="M or F" method="POST" action="">
			<label for="Username">Inserire Username</label>
			<br>
			<input type="text" name="Username" />
			<br>
			
			<label for="Password">Inserire Password</label>
			<br>
			<input type="password" name="Password" />
			<br><br>
			
			<input type="radio" value="M" name="sex"><b> M </b>
			<br>
			<input type="radio" value="F" name="sex"><b> F </b>
			<br>
			<input type="radio" value="Undefined" name="sex"><b> Non definito </b>
			<br>
			
			
			<br><br>
			
			<input type="submit" value="Click to login" />
		</form>
	</body>
<html>	