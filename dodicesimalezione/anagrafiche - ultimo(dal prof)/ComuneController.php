<?php
require_once 'Comune.php';
class ComuneController {
	
	public static function caricaComuni() {
		$comuni = [];
		
		require 'connessione_db.php';
		$statement = $pdo->query("SELECT * FROM comuni");
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
		
		require 'connessione_db.php';
		$statement = $pdo->query("SELECT * FROM comuni WHERE id=".$pdo->quote($id));
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
	
	public static function aggiungiComune(Comune $comune) {
		
		require 'connessione_db.php';
		$sql="INSERT INTO comuni (nome, provincia, regione, stato) VALUES (:nome, :provincia, :regione, :stato)";
		$stmt = $pdo->prepare($sql);
		
		print_r($pdo->errorInfo());

		$stmt->bindValue(':nome', $comune->getNome(), PDO::PARAM_STR);
		$stmt->bindValue(':provincia', $comune->getProvincia(), PDO::PARAM_STR);
		$stmt->bindValue(':regione', $comune->getRegione(), PDO::PARAM_STR);
		$stmt->bindValue(':stato', $comune->getStato(), PDO::PARAM_STR);
		
		echo $stmt->queryString;
		
		$stmt->execute();
		
		//$stmt->rowCount();
		//$id = $pdo->lastInsertId();
	}
	
	
	public static function aggiornaComune(Comune $comune) {
		
		require 'connessione_db.php';
		$sql="UPDATE comuni SET nome=:nome, provincia=:provincia, regione=:regione, stato=:stato WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		
		print_r($pdo->errorInfo());

		$stmt->bindValue(':id', $comune->getId(), PDO::PARAM_INT );
		$stmt->bindValue(':nome', $comune->getNome(), PDO::PARAM_STR);
		$stmt->bindValue(':provincia', $comune->getProvincia(), PDO::PARAM_STR);
		$stmt->bindValue(':regione', $comune->getRegione(), PDO::PARAM_STR);
		$stmt->bindValue(':stato', $comune->getStato(), PDO::PARAM_STR);
		
		
		echo $stmt->queryString;

		
		$stmt->execute();
		
		//$stmt->rowCount();
		//$id = $pdo->lastInsertId();
	}
	
	public static function eliminaComune(Comune $comune) {
		
		require 'connessione_db.php';
		$sql="DELETE FROM comuni WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		
		print_r($pdo->errorInfo());

		$stmt->bindValue(':id', $comune->getId(), PDO::PARAM_INT );
		
		echo $stmt->queryString;

		$stmt->execute();
		
		//$stmt->rowCount();
		//$id = $pdo->lastInsertId();
	}
}