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
	
	public static function aggiungiComune(Comune $comune){
		
		$pdo = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		$sql="INSERT INTO comuni VALUES (:id, :nome, :provincia, :regione, :stato)";
		$stmt = $pdo->prepare($sql);
		
		$stmt->bindValue(':id', null, PDO::PARAM_NULL );
		$stmt->bindValue(':nome', $comune->getNome(), PDO::PARAM_STR);
		$stmt->bindValue(':provincia', $comune->getProvincia(), PDO::PARAM_STR);
		$stmt->bindValue(':regione', $comune->getRegione(), PDO::PARAM_STR);
		$stmt->bindValue(':stato', $comune->getStato(), PDO::PARAM_STR);
		
		$stmt->execute();
		
		
	}
	
	public static function aggiornaComune(Comune $comune){
		
		$pdo = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		// non ci vuole la virgola prima del WHERE!
		$sql="UPDATE comuni SET nome=:nome, provincia=:provincia, regione=:regione, stato=:stato  WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		
		//print_r($pdo->errorInfo());
		
		$stmt->bindValue(':id', $comune->getId(), PDO::PARAM_INT );
		$stmt->bindValue(':nome', $comune->getNome(), PDO::PARAM_STR);
		$stmt->bindValue(':provincia', $comune->getProvincia(), PDO::PARAM_STR);
		$stmt->bindValue(':regione', $comune->getRegione(), PDO::PARAM_STR);
		$stmt->bindValue(':stato', $comune->getStato(), PDO::PARAM_STR);
		
		echo $stmt->queryString;
		
		$stmt->execute();
	}
	
	public static function eliminaComune(Comune $comune){
		
		$pdo = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		$sql="DELETE FROM comuni WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		
		$stmt->bindValue(':id', $comune->getId(), PDO::PARAM_INT );
		
		$stmt->execute();
		
	}
}