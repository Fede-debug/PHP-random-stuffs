<html>
	<body>
		<table border="4">
			<?php $n=0; for($i=0;$i<10;$i++){ ?>
				<tr>
					<?php for($j=0;$j<10;$j++){ ?> 
						
						<td style="background-color:<?=(($i+$j)%2) ? 'red' : 'green' ?>;"><?=($i+1)*($j+1)?></td> 
					
					<?php } ?>
				</tr>
			<?php } ?>
		<table>
	</body>
</html>