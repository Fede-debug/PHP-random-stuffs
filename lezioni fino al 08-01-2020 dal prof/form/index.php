<html>
	<body>
		<form id="primo_form" method="POST" action="../richieste/richiesta_post.php">
			<label for="username">Nome utente</label>
			<input name="username" type="text" placeholder="Inserire lo username" >
			
			<input name="psw" type="password">
			
			<input name="nascosto" type="hidden" value="123">
			
			<input type="checkbox" checked="checked">
			
			<input type="radio">
			
			<input type="file">
			
			<textarea name="testo_libero">gegerwgwegerwterwt</textarea>
			
			<select name="colore">
				<option value="1">rosso</option>
				<option value="2" selected="selected">verde</option>
				<option value="3">blu</option>
			</select>
			
			
			
			<button>INVIA</button>

		</form>
	</body>
</html>