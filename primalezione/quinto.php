<html>
	<body>
		<ol>
		   <?php
		       
			   echo "<li>";
			   $a=6.78;
			   echo is_float($a);
			   echo "<li>";
			   echo gettype($a);
			   echo "</li>";
			   echo "<li>";
			   echo is_int($a);
			   echo "</li>";
			   $a="stringa";
			   echo "<li>";
			   echo is_string($a);
			   echo "</li>";
			   echo "<li>";
			   echo var_dump($a);
			   echo "</li>";
			   
			   
			?>
		</ol>	
	</body>
</html>	