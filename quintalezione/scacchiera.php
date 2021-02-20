<html>
	<body>
		<table border="4">
			<?php $n=0; for($i=0;$i<10;$i++){ 
			                $n++; ?>
				<tr>
					<?php for($j=0;$j<10;$j++){
						      $n++; ?> 
						
						<td <?php if(($n+1)%2){?> style="background-color: black;" <?php } ?>><?=($i+1)*($j+1)?></td>
					
					<?php } ?>
				</tr>
			<?php } ?>
		<table>
	</body>
</html> 