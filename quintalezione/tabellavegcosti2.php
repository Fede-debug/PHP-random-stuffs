<?php
//aggiungi media, minimo e massimo
$verdura=["pomodoro" => 2,"piselli" => "1","peperone" => 0.98,"peperoncino" => 2.15 ,"funghi" => 3.5];

//$min=$max=$verdura[0]; non funziona perché è un array associativo
$i=0;

foreach($verdura as $item){
	if($i==0)
		$min=$max=$item;
		
	calcolaMinMax($item);
	$i++;
	
}



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
			<tr>
				<td>media</td>
				
				
				<td><?=($sum/count($verdura));?>&euro;</td>
				
				
			</tr>
			<tr>
				<td>minimo</td>
				
				
				<td><?=$min?>&euro;</td>
				
				
			</tr>
			<tr>
				<td>massimo</td>
				
				
				<td><?=$max?>&euro;</td>
				
				
			</tr>
			
		</table>
	</body>
</html>

<?php


function calcolaMinMax($d){
		global $min;
		global $max;
		
		if($d>$max){
		   $max=$d;
		}
		if($d<$min){
			$min=$d;
		}
	}
	
?>


