<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Variable functions...</title>
    </head>
	<body>
		<?php
		function foo() {
			echo "In foo()<br />\n";
		}

		function bar($arg = '')
		{
			echo "In bar(); argument was '$arg'.<br />\n";                 //altri metodi per Variable functions in php.net
		}

		// This is a wrapper function around echo
		function echoit($string)
		{
			echo $string;									//Variable functions won't work with language constructs such as 
		}													//echo, print, unset(), isset(), empty(), include, require and the like. 
															//Utilize wrapper functions to make use of any of these constructs as variable functions.
		$func = 'foo';
		$func();        // This calls foo()
																
		$func = 'bar';											
		$func('test');  // This calls bar()

		$func = 'echoit';
		$func('test');  // This calls echoit()
		?>
	</body>
</html>	


