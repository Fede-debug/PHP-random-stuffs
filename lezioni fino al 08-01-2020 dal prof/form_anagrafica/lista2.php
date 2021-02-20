<html>
	<body>
		<?php
			$contenuto = file_get_contents("contatti.csv");
			$righe = explode(PHP_EOL, $contenuto); 
		?>
		<table border="1">
			<tr>
				<th>Nome</th> <th>Cognome</th> <th>Citt&agrave;</th> <th>Email</th>
			</tr>
			<?php 
			foreach($righe as $riga) {
				if(!empty($riga)) {
					$info = explode(";", $riga);
				
				?>
				<tr>
					<?php 
					foreach($info as $i) { 
					?>
					<td><?=$i;?></td>
					<?php 
					} 
					?>
				</tr>
					
				<?php 
					}
				}
				?>

		</table>
		
	
	</body>
<html>