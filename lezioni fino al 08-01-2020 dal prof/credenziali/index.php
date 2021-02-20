<html>
	<body>
		<form method="POST" action="submit.php">
			<label for="username">Inserire lo username</label>
			<input type="text" name="username">
			<br>
			<label for="password">Inserire la password</label>
			<input type="password" name="password">
			<br>
			
			<input type="radio" value="M" name="sesso" checked> Maschio <br>
			<input type="radio" value="F" name="sesso"> Femmina <br>
			
			<label>Selezionare gli ortaggi preferiti:</label> <br>
			<input type="checkbox" value="pomodori" name="0"> Pomodori <br>
			<input type="checkbox" value="funghi" name="1"> Funghi <br>
			<input type="checkbox" value="peperoni" name="2"> Peperoni <br>
			<input type="checkbox" value="peperoncini" name="3"> Peperoncini <br>
			
			<select name="umore">
				<?php 
				$righe = file("umori.csv");
				foreach($righe as $riga) {
					$dati = explode(";", $riga);
				?>
				<option value="<?=$dati[0]?>"><?=$dati[1]?></option>
				<?php 
				} 
				?>
			</select>
			
			<br>
			
			<label for="cibi">Selezionare i cibi preferiti</label> 
			<br>
			<select name="cibi[]" multiple>
				<?php
				$righe = file("cibi.csv");
				foreach($righe as $riga) {
					$dati = explode(";", $riga);
				?>
				<option value="<?=$dati[0];?>"><?=$dati[1];?></option>
				<?php 
				} 
				?>
			</select>
			
			<br>
			
			
			<input type="submit" value="INVIO">
			
			<!--button type="submit">INVIO</button-->
		</form>
	</body>
</html>