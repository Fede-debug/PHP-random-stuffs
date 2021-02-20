<?php
require_once 'Persona.php';
require_once 'Indirizzo.php';
require_once 'Comune.php';

class PersonaController {
	
	public static function caricaPersoneOld() {
		
		$persone = [];
		
		$info = file('dati.csv');
		foreach($info as $record) {
			$data = explode('; ', $record);
			$persona = new Persona();
			
			$persona->setCognome($data[0]);
			$persona->setNome($data[1]);
			$persona->setDataNascita($data[2]);
			$persona->setCodiceFiscale($data[10]);
			$persona->setEmail($data[18]);
			$persona->setTelefono($data[19]);
			
			$indirizzoResidenza = new Indirizzo();
			$indirizzoResidenza->setVia($data[3]);
			$indirizzoResidenza->setCivico($data[4]);
			$indirizzoResidenza->setCap($data[5]);
			
			$comuneResidenza = new Comune;
			$comuneResidenza->setNome($data[6]);
			$comuneResidenza->setProvincia($data[7]);
			$comuneResidenza->setRegione($data[8]);
			$comuneResidenza->setStato($data[9]);
			
			$indirizzoResidenza->setComune($comuneResidenza);
			
			$persona->setIndirizzoResidenza($indirizzoResidenza);
			
			$indirizzoDomicilio = new Indirizzo;
			$indirizzoDomicilio->setVia($data[11]);
			$indirizzoDomicilio->setCivico($data[12]);
			$indirizzoDomicilio->setCap($data[13]);
			
			$comuneDomicilio = new Comune;
			$comuneDomicilio->setNome($data[14]);
			$comuneDomicilio->setProvincia($data[15]);
			$comuneDomicilio->setRegione($data[16]);
			$comuneDomicilio->setStato($data[17]);
			
			$indirizzoDomicilio->setComune($comuneDomicilio);
			
			$persona->setIndirizzoDomicilio($indirizzoDomicilio);
			
			$persone[] = $persona;	
		}
		
		return $persone;
	}
	
	public static function caricaPersone() {
		
		$connessione = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		$statement = $connessione->query("SELECT * FROM persone");
		while( $row = $statement->fetch() ) {
			$persona = new Persona();
			
			$persona->setId($row['id']);
			$persona->setCognome($row['cognome']);
			$persona->setNome($row['nome']);
			$persona->setDataNascita($row['data_nascita']);
			$persona->setCodiceFiscale($row['codice_fiscale']);
			$persona->setEmail($row['email']);
			$persona->setTelefono($row['telefono']);
			
			$indirizzoResidenza = new Indirizzo();
			$indirizzoResidenza->setVia($row['via_residenza']);
			$indirizzoResidenza->setCivico($row['civico_residenza']);
			$indirizzoResidenza->setCap($row['cap_residenza']);
			
			$comuneResidenza = new Comune;
			$comuneResidenza->setNome($row['comune_residenza']);
			$comuneResidenza->setProvincia($row['provincia_residenza']);
			$comuneResidenza->setRegione($row['regione_residenza']);
			$comuneResidenza->setStato($row['stato_residenza']);
			
			$indirizzoResidenza->setComune($comuneResidenza);
			
			$persona->setIndirizzoResidenza($indirizzoResidenza);
			
			$indirizzoDomicilio = new Indirizzo;
			$indirizzoDomicilio->setVia($row['via_domicilio']);
			$indirizzoDomicilio->setCivico($row['civico_domicilio']);
			$indirizzoDomicilio->setCap($row['cap_domicilio']);
			
			$comuneDomicilio = new Comune;
			$comuneDomicilio->setNome($row['comune_domicilio']);
			$comuneDomicilio->setProvincia($row['provincia_domicilio']);
			$comuneDomicilio->setRegione($row['regione_domicilio']);
			$comuneDomicilio->setStato($row['stato_domicilio']);
			
			$indirizzoDomicilio->setComune($comuneDomicilio);
			
			$persona->setIndirizzoDomicilio($indirizzoDomicilio);
			
			$persone[] = $persona;	
		}
		
		return $persone;
	}
	
	
	public static function aggiungiPersonaOld($persona) {

		$riga = $persona->getCognome() . "; ";
		$riga .= $persona->getNome() . "; ";
		$riga .= $persona->getDataNascita() . "; ";
		$riga .= $persona->getIndirizzoResidenza()->getVia() . "; ";
		$riga .= $persona->getIndirizzoResidenza()->getCivico() . "; ";
		$riga .= $persona->getIndirizzoResidenza()->getCap() . "; ";
		$riga .= $persona->getIndirizzoResidenza()->getComune()->getNome() . "; ";
		$riga .= $persona->getIndirizzoResidenza()->getComune()->getProvincia() . "; ";
		$riga .= $persona->getIndirizzoResidenza()->getComune()->getRegione() . "; ";
		$riga .= $persona->getIndirizzoResidenza()->getComune()->getStato() . "; ";
		$riga .= $persona->getCodiceFiscale() . "; ";
		$riga .= $persona->getIndirizzoDomicilio()->getVia() . "; ";
		$riga .= $persona->getIndirizzoDomicilio()->getCivico() . "; ";
		$riga .= $persona->getIndirizzoDomicilio()->getCap() . "; ";
		$riga .= $persona->getIndirizzoDomicilio()->getComune()->getNome() . "; ";
		$riga .= $persona->getIndirizzoDomicilio()->getComune()->getProvincia() . "; ";
		$riga .= $persona->getIndirizzoDomicilio()->getComune()->getRegione() . "; ";
		$riga .= $persona->getIndirizzoDomicilio()->getComune()->getStato() . "; ";
		$riga .= $persona->getEmail() . "; ";
		$riga .= $persona->getTelefono() . PHP_EOL;
		
		
		file_put_contents('dati.csv', $riga, FILE_APPEND);
	}
	
	public static function aggiungiPersona($persona) {
		
		$pdo = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		$sql="INSERT INTO persone VALUES (:id, :cognome, :nome, :data_nascita, :via_residenza, :civico_residenza, :cap_residenza, :comune_residenza, :provincia_residenza, :regione_residenza, :stato_residenza, :codice_fiscale, :via_domicilio, :civico_domicilio, :cap_domicilio, :comune_domicilio, :provincia_domicilio, :regione_domicilio, :stato_domicilio, :email, :telefono)";
		$stmt = $pdo->prepare($sql);
		
		print_r($pdo->errorInfo());

		$stmt->bindValue(':id', null, PDO::PARAM_NULL );
		$stmt->bindValue(':cognome', $persona->getCognome(), PDO::PARAM_STR);
		$stmt->bindValue(':nome', $persona->getNome(), PDO::PARAM_STR);
		
		$stmt->bindValue(':data_nascita', $persona->getDataNascita(), PDO::PARAM_STR);
		$stmt->bindValue(':codice_fiscale', $persona->getCodiceFiscale(), PDO::PARAM_STR);
		
		$stmt->bindValue(':via_residenza', $persona->getIndirizzoResidenza()->getVia(), PDO::PARAM_STR);
		$stmt->bindValue(':civico_residenza', $persona->getIndirizzoResidenza()->getCivico(), PDO::PARAM_STR);
		$stmt->bindValue(':cap_residenza', $persona->getIndirizzoResidenza()->getCap(), PDO::PARAM_STR);
		$stmt->bindValue(':comune_residenza', $persona->getIndirizzoResidenza()->getComune()->getNome(), PDO::PARAM_STR);
		$stmt->bindValue(':provincia_residenza', $persona->getIndirizzoResidenza()->getComune()->getProvincia(), PDO::PARAM_STR);
		$stmt->bindValue(':regione_residenza', $persona->getIndirizzoResidenza()->getComune()->getRegione(), PDO::PARAM_STR);
		$stmt->bindValue(':stato_residenza', $persona->getIndirizzoResidenza()->getComune()->getStato(), PDO::PARAM_STR);
		
		
		$stmt->bindValue(':via_domicilio', $persona->getIndirizzoDomicilio()->getVia(), PDO::PARAM_STR);
		$stmt->bindValue(':civico_domicilio', $persona->getIndirizzoDomicilio()->getCivico(), PDO::PARAM_STR);
		$stmt->bindValue(':cap_domicilio', $persona->getIndirizzoDomicilio()->getCap(), PDO::PARAM_STR);
		$stmt->bindValue(':comune_domicilio', $persona->getIndirizzoDomicilio()->getComune()->getNome(), PDO::PARAM_STR);
		$stmt->bindValue(':provincia_domicilio', $persona->getIndirizzoDomicilio()->getComune()->getProvincia(), PDO::PARAM_STR);
		$stmt->bindValue(':regione_domicilio', $persona->getIndirizzoDomicilio()->getComune()->getRegione(), PDO::PARAM_STR);
		$stmt->bindValue(':stato_domicilio', $persona->getIndirizzoDomicilio()->getComune()->getStato(), PDO::PARAM_STR);
		
		$stmt->bindValue(':email', $persona->getEmail(), PDO::PARAM_STR);
		$stmt->bindValue(':telefono', $persona->getTelefono(), PDO::PARAM_STR);
		
		echo $stmt->queryString;

		
		$stmt->execute();
		
		//$stmt->rowCount();
		//$id = $pdo->lastInsertId();
	}
	
	
	public static function dettaglioPersona($id) : Persona {
		
		$connessione = new PDO("mysql:host=localhost;dbname=anagrafiche", "root", null);
		$statement = $connessione->query("SELECT * FROM persone WHERE id=".$connessione->quote($id));
		while( $row = $statement->fetch() ) {
			$persona = new Persona();
			
			$persona->setId($row['id']);
			$persona->setCognome($row['cognome']);
			$persona->setNome($row['nome']);
			$persona->setDataNascita($row['data_nascita']);
			$persona->setCodiceFiscale($row['codice_fiscale']);
			$persona->setEmail($row['email']);
			$persona->setTelefono($row['telefono']);
			
			$indirizzoResidenza = new Indirizzo();
			$indirizzoResidenza->setVia($row['via_residenza']);
			$indirizzoResidenza->setCivico($row['civico_residenza']);
			$indirizzoResidenza->setCap($row['cap_residenza']);
			
			$comuneResidenza = new Comune;
			$comuneResidenza->setNome($row['comune_residenza']);
			$comuneResidenza->setProvincia($row['provincia_residenza']);
			$comuneResidenza->setRegione($row['regione_residenza']);
			$comuneResidenza->setStato($row['stato_residenza']);
			
			$indirizzoResidenza->setComune($comuneResidenza);
			
			$persona->setIndirizzoResidenza($indirizzoResidenza);
			
			$indirizzoDomicilio = new Indirizzo;
			$indirizzoDomicilio->setVia($row['via_domicilio']);
			$indirizzoDomicilio->setCivico($row['civico_domicilio']);
			$indirizzoDomicilio->setCap($row['cap_domicilio']);
			
			$comuneDomicilio = new Comune;
			$comuneDomicilio->setNome($row['comune_domicilio']);
			$comuneDomicilio->setProvincia($row['provincia_domicilio']);
			$comuneDomicilio->setRegione($row['regione_domicilio']);
			$comuneDomicilio->setStato($row['stato_domicilio']);
			
			$indirizzoDomicilio->setComune($comuneDomicilio);
			
			$persona->setIndirizzoDomicilio($indirizzoDomicilio);
			
		}
		
		return $persona;
	}
	
}