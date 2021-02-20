<html>
	<body>
		<?php
			$righe = file("contatti.csv");
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