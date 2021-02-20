<html>
	<body>
		<?php
			$f = fopen("contatti.csv", "r");
		?>
		<table border="1">
			<tr>
				<th>Nome</th> <th>Cognome</th> <th>Citt&agrave;</th> <th>Email</th>
			</tr>
			
			<?php 
			while(!feof($f)) {
				$riga = fgets($f);
				$riga = rtrim($riga);
				if(!empty($riga)) {
					$info = explode(";", $riga);
			?>
			
				<tr>
					<?php 
						foreach($info as $token) {
					?>
						<td><?=$token?></td>
					<?php
						}
					}				
					?>
				</tr>

			<?php 
			} 
			?>
		</table>
		
		<?php 
		fclose($f); 
		?>
	</body>
<html>