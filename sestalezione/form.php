<html>
	<body>
		<form id="primo_form" method="POST" action="../sestalezione/richieste_post.php">
		<label for="username">Username</label>
		<input name="username" type="text" value="federico">
		<br><br>
		
		<label for="password">Password</label>
		<input name="password" type="password" placeholder="metti password">
		<br><br>
		
		<input name="nascosto" type="hidden" value="123">
		
		<input type="checkbox" checked="checked">		<!-- oppure checked da solo-->
		<br><br>
		
		<input type="radio">
		<br><br>
		
		<input type="file">
		<br><br>
		
		<textarea name="testo_libero" placeholder="aggiungi qualcosa"></textarea>
		<br><br>
		
		<select>
			<option value="1">rosso</option>
			<option value="2" selected>verde</option>
			<option value="3">blue</option>
		</select>
		<br><br>
		
		<input name="iscrivi" type="submit">
		<input name="recuperapassword" type="submit">
		<br><br>
		
		<button>Pulsante aggiuntivo</button>  <!-- button diventa il submit di default senza il tipo submit-->
		
		</form>
	</body>
</html>