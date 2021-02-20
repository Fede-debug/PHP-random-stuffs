<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Form username and password</title>
    </head>
	<body>
		<h3>Inserisci Username e Password</h3>
		
		<form id="M or F" method="POST" action="POST_MoF.php">
			<label for="Username">Inserire Username</label>
			<br>
			<input type="text" name="Username" />
			<br>
			
			<label for="Password">Inserire Password</label>
			<br>
			<input type="password" name="Password" />
			<br><br>
			
			<input type="radio" value="M" name="sex"><b> M </b>   <!-- anche questo può avere checked -->
			<br>
			<input type="radio" value="F" name="sex"><b> F </b>
			<br>
			<!--input type="radio" value="Undefined" name="sex"><b> Non definito </b> -->
			<br>
			<!--aggiungi verdure -->
			<!-- aggiungi umore statico: se non metto value nel select arriva l'option -->
			
			<label>Selezionare gli ortaggi preferiti:</label> <br>
			<input type="checkbox" value="pomodori" name="0"> Pomodori <br>
			<input type="checkbox" value="funghi" name="1"> Funghi <br>
			<input type="checkbox" value="peperoni" name="2"> Peperoni <br>
			<input type="checkbox" value="peperoncini" name="3"> Peperoncini <br>
			
			<!-- umore dinamico -->	

			<h4>Seleziona umore</h4>
			<select name="umore">
				<?php $f1=fopen('umori.csv','r');
					  while(!feof($f1))
						{
						  $line = fgets($f1);
						  $line = rtrim($line);
						  $array=explode(";",$line);
						  /*
						  $righe=file('umori.csv');
						  foreach($righe as $riga){
						  $array=explode(";",$riga);
						  */
						 ?> 
				<option value="<?=$array[0]?>"><?=$array[1]?></option>
						<?php }/*} */?>
			</select>
			<br><br>
			
			<!-- select di cibi dinamico -->
			
			<h4>Seleziona cibi preferiti</h4>
			<select name="cibi[]" multiple>
			
			
			
				<?php 
					$righe=file('cibi.csv');
					foreach($righe as $riga) {
						$array=explode(";",$riga);
				?>
				<option value="<?=$array[0]?>"><?=$array[1]?></option>
				<?php
					}
				?>
				
			</select>	
			
			<br><br>
			
			<input type="submit" value="Click to login" />
		</form>
	</body>
<html>	