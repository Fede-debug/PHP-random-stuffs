<html>
	<body>
		
		  <?php
		       $x;
			   var_dump($x);
			   echo "<br>";
			   $x=NULL;
			   var_dump($x);
			   echo "<br>";
			   define("PIGRECO",3.1415);
			   echo "<br>";
			   echo PIGRECO;
			   echo "<br>";
			   $x=PIGRECO*2;
			   echo $x;
			   echo " PIGRECO &egrave; definito? " . defined('PIGRECO') . "<br>";
			   echo " E_NEPERO &egrave; definito? " . defined('E_NEPERO') . "<br>";
			   define('E_NEPERO',2.71);
			   echo " E_NEPERO &egrave; definito? " . defined('E_NEPERO') . "<br>";
			   var_dump(PIGRECO);
			   echo "<br> wowee";
			   if(defined('PIGRECO'))
				   echo "<br> PIGRECO esiste ancora";
		       
			   
		        
		       
			   
			   
			   
		   ?>
			
	</body>
</html>	