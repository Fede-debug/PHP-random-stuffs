<html>
	<body>
	      
				
				
		    
		    <table border="4">
			   <?php                     // dentro td si noti la forma alternativo per 'stampare' numero senza echo
			      $n=0;
				  $lato=20;
				  for($i=0;$i<$lato;$i++){  //rifai separando html e php e usando due for
		        ?>
				 <tr>
					<?php for($j=0;$j<$lato;$j++){ 
					      $n++;
				    ?> <td><?=$n?></td> <?php } ?> 
				 </tr>
		        <?php } ?>
		  
		  
		  
		  
		  
		  </table>
	</body>
</html>

