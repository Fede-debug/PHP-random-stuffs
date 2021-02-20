<?php
require_once 'Comune.php';
class ComuneController {
	
	public static function caricaComuni() {
		$comuni = [];
		
		$connessione = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		$statement = $connessione->query("SELECT * FROM comuni");
		while( $row = $statement->fetch() ) {
			$comune = new Comune();
			
			$comune->setId($row['id']);
			$comune->setNome($row['nome']);
			$comune->setProvincia($row['provincia']);
			$comune->setRegione($row['regione']);
			$comune->setStato($row['stato']);
			
			$comuni[] = $comune;	
		}
		
		return $comuni;
	}
	
	public static function dettaglioComune($id) : Comune {
		
		$connessione = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		$statement = $connessione->query("SELECT * FROM comuni WHERE id=".$connessione->quote($id));
		while( $row = $statement->fetch() ) {
			$comune = new Comune();
			
			$comune->setId($row['id']);
			$comune->setNome($row['nome']);
			$comune->setProvincia($row['provincia']);
			$comune->setRegione($row['regione']);
			$comune->setStato($row['stato']);
		}
		
		return $comune;
	}
	
	public static function aggiungiComune($comune){
		
		
		$pdo = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		$sql="INSERT INTO comuni VALUES (:id, :nome, :provincia, :regione, :stato)";
		$stmt = $pdo->prepare($sql);
		
		$stmt->bindValue(':id', null, PDO::PARAM_NULL );
		$stmt->bindValue(':cognome', $comune->getNome(), PDO::PARAM_STR);
		$stmt->bindValue(':cognome', $comune->getProvincia(), PDO::PARAM_STR);
		$stmt->bindValue(':cognome', $comune->getRegione(), PDO::PARAM_STR);
		$stmt->bindValue(':cognome', $comune->getStato(), PDO::PARAM_STR);
		
		$stmt->execute();
	}
}