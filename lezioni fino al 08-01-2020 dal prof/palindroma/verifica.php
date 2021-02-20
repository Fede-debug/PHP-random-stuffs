<html>
	<body>
	<?php
	if(isset($_POST["stringa"]) ) {
		if( !empty($_POST["stringa"])) {
			$stringa = $_POST["stringa"];

			$stringaInvertita = strrev($stringa);

			if($stringa == $stringaInvertita) {
				echo "La stringa $stringa è palindroma";
			} else {
				echo "La stringa non è palindroma";
			}
		} else {
			echo "Il valore non può essere vuoto";
		}
	} else {
		echo "Errore";
	}

	?>
		<a href="index.html">Torna alla pagina principale</a>
	</body>
</html>