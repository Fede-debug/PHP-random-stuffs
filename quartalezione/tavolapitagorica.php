<html>
	<body>
		<table border="4">
			<?php for($i=0;$i<10;$i++){ ?>
				<tr style="background-color: green;">
					<?php for($j=0;$j<10;$j++){?> 
						
						<td><?=($i+1)*($j+1)?></td>
					
					<?php } ?>
				</tr>
			<?php } ?>
		<table>
	</body>
</html> 