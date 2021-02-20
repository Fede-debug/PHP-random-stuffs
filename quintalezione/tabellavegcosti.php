<?php
//aggiungi media, minimo e massimo
$verdura=["pomodoro" => 2,"piselli" => "1","peperone" => 0.98,"peperoncino" => 2.15 ,"funghi" => 3.5];

?>

<html>
	<body>
		<table border="4">
		    <tr>
				<th>
				   immagine
				</th>
				<th>
				   costo
				</th>
			</tr>
		    <?php $sum=0;
			      foreach($verdura as $key => $item){?>
			
			
			<tr>
				<td><img src="img/<?=$key?>.jpg" alt="è un <?=$key;?>" width="200"></td>
				
				<td><?=$item?>&euro;</td>
				
			</tr>
			
			
			<?php
			$sum+=$item;
			 } ?>
			<tr>
				<td>somma</td>
				
				
				<td><?=$sum?>&euro;</td>
				
				
			</tr>
			
		</table>
	</body>
</html>

