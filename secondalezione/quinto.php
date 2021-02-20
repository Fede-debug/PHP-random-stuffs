<html>
	<body>
		
		  <?php
		       $a=5;
			   $b=3;
			   $c=$a**$b;  // 5 elevato 3
			   $d=15;
			   $d+=$c;  // d= d+c
			   
			   $x="ciao";
			   $x.="mondo";  // "ciao"."mondo"
			   echo "<p> $x <br>";
			   
			   $z=0;
			   echo ++$z;  // preincremeto
			   echo "<br>";
			   $z=0;
			   echo $z++;  // postincremento
			   echo "<br>";
			   $z=5;
			   echo $z=$z+1 ." </p>";
			   
			   $ab=true;
			   $cd=false;
			   $zz=$ab&$cd;  //and bit a bit
			   echo "<p>" .$zz . "<br>";
			   $zz=$ab&&$cd; // and logico
			   echo $zz . "<br>";
			   !$ab; // false
			   echo $ab . "</p>";
			   
			   
			   
			   $aa=67;
			   $bb="67";
			   //$bb=3;
			   
			   echo ($aa+$bb) . " assegnazione <br>"; //assegnazione
			   echo ($aa==$bb) . " confronto senza tipo <br>"; //confronto senza tipo
			   echo ($aa===$bb) . " confronto con tipo <br>";  // con tipo
			   echo ($aa!=$bb) . " disuguaglianza <br>"; //disuguaglianza
			   echo ($aa!==$bb) . " not equal<br>"; // not equal
			   
		       
			   
		        
		       
			   
			   
			   
		   ?>
			
	</body>
</html>	