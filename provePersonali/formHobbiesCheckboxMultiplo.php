<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Seleziona hobbies</title>
    </head>
	<body>
		<h3>Seleziona i tuoi hobbies (scelta multipla)</h3>
		
		
		
		<form id="hob" method="POST" action="POST_Hobbies.php">
		
		<label>Lista hobbies:</label> <br>
			<input type="checkbox" value="Videogames" name="hobbies[]"> Videogames <br>
			<input type="checkbox" value="Lettura" name="hobbies[]"> Lettura <br>
			<input type="checkbox" value="Sport di squadra" name="hobbies[]"> Sport di squadra <br>
			<input type="checkbox" value="Sport individuale" name="hobbies[]"> Sport individuale <br>
			<input type="checkbox" value="Viaggi e Turismo" name="hobbies[]"> Viaggi e Turismo <br>
			<br><br>
			
			<input type="submit" value="Click to send" />
	</body>
<html>	