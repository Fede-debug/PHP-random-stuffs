<?php

$verdura=["pomodoro","piselli","peperone","peperoncino","funghi"];

?>

<html>
	<body>
		<table border="4">
		    <tr>
				<th>
				   Nome
				</th>
				<th>
				   Immagine relativa
				</th>
			</tr>
		    <?php for($i=0;$i<count($verdura);$i++){?>
			
			
			<tr>
				<td><?=$verdura[$i]?></td>
				
				<td><img src="img/<?=$verdura[$i]?>.jpg" alt="immagine di <?=$verdura[$i];?>" title="<?=$verdura[$i]?>" width="200"></td>
				
			</tr>
			<?php } ?>
			
		</table>
	</body>
</html>