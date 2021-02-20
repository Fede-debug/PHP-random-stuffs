<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tabella anagrafica</title>
    </head>
	<body>
		<table border="4">
				<tr>
					<th>Nome</th><th>Cognome</th><th>Mail</th>
				<tr>
				
			<?php 
			$f1=fopen('anagrafica.csv','r');
			?>
			
				<?php
					while(!feof($f1))
					{
					  $line = fgets($f1);
					  $line = rtrim($line);
				  
				

			    ?>
					<tr>
						<?php 
						
						if(!empty($line)){
							
						$array=explode(";",$line);
						foreach($array as $item){
						?>
							<td>
								<?=$item?>
							</td>
					<?php }
					}
					?>	
					<tr>
				<?php } ?>
		<table>
		
		<?php fclose($f1); ?>
		
	</body>
<html>	