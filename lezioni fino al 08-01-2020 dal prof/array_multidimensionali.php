<html>
	<body>
		<pre>
		<?php
		$v = [
			"001" => ["nome" => "Mario", "cognome" => "Rossi"],
			"005" => ["nome" => "Giulio", "cognome" => "Bianchi"],
			"130" => ["nome" => "Andrea", "cognome" => "Verdi"]
		];
		
		print_r($v);
		
		$v["005"]["nome"] = "Giulia";
		
		print_r($v);
		?>
		</pre>
	</body>
</html>