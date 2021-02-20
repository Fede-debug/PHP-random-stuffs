<html>
	<body>
	     
		
		     <?php
		  
		          echo __FILE__;
			      echo "<br>";
			      echo __DIR__;
		          echo "<br>";
			      echo __LINE__;
				  echo "<br>";
			   
		        
		       function pippo_file(){
				   echo __FUNCTION__;
				   echo "<br>";
			   }
			   
			   pippo_file();
			   
			   

			   	
			   
			   
			   
		     ?>
		  <pre>
		  <?php 

			   var_dump(get_defined_constants(true));
			   ?>
		 </pre>  
		   
			
	</body>
</html>	