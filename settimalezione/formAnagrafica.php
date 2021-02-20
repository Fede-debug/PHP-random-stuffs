<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Dati anagrafici</title>
    </head>
	<body>
		<h3>Inserisci i dati anagrafici</h3>
		
		<form id="dati anagrafici" method="POST" action="POST_anagrafica.php">
			<label for="Nome">Inserire Nome</label>
			<br>
			<input type="text" name="nome" />
			<br>
			
			<label for="Cognome">Inserire Cognome</label>
			<br>
			<input type="text" name="cognome" />
			<br>
			
			<label for="Email">Inserire mail</label>
			<br>
			<input type="text" name="mail" />
			<br>
			
			
			
			<br><br>
			
			<input type="submit" value="Click to send" />   <!-- ricordati il name se ci sono più di un submit -->
		</form>
	</body>
<html>	