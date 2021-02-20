<?php
require_once 'Persona.php';
require_once 'Indirizzo.php';
require_once 'Comune.php';

class PersonaController {
	
	public static function caricaPersone() {
		
		$persone = [];
		
		//$info = file('dati.csv');
		
		$dsn = "mysql:host=localhost;dbname=anagrafiche";
		$username = "root";
		$password = null;
		$connessione = new PDO( $dsn, $username, $password );
		$resultset = $connessione->query("SELECT * FROM persone");
		
		while($data = $resultset->fetch()){   //$data è una linea del record
			
			//var_dump($data);
			
			$persona = new Persona();
			
			$persona->setCognome($data[1]);
			$persona->setNome($data[2]);
			$persona->setDataNascita($data[3]);
			$persona->setCodiceFiscale($data[11]);
			$persona->setEmail($data[19]);
			$persona->setTelefono($data[20]);
			
			$indirizzoResidenza = new Indirizzo();
			$indirizzoResidenza->setVia($data[4]);
			$indirizzoResidenza->setCivico($data[5]);
			$indirizzoResidenza->setCap($data[6]);
			
			$comuneResidenza = new Comune;
			$comuneResidenza->setNome($data[7]);
			$comuneResidenza->setProvincia($data[8]);
			$comuneResidenza->setRegione($data[9]);
			$comuneResidenza->setStato($data[10]);
			
			$indirizzoResidenza->setComune($comuneResidenza);
			
			$persona->setIndirizzoResidenza($indirizzoResidenza);
			
			$indirizzoDomicilio = new Indirizzo;
			$indirizzoDomicilio->setVia($data[12]);
			$indirizzoDomicilio->setCivico($data[13]);
			$indirizzoDomicilio->setCap($data[14]);
			
			$comuneDomicilio = new Comune;
			$comuneDomicilio->setNome($data[15]);
			$comuneDomicilio->setProvincia($data[16]);
			$comuneDomicilio->setRegione($data[17]);
			$comuneDomicilio->setStato($data[18]);
			
			$indirizzoDomicilio->setComune($comuneDomicilio);
			
			$persona->setIndirizzoDomicilio($indirizzoDomicilio);
			
			$persone[] = $persona;
			
			
		}
		
		
		//foreach($info as $record) {
			//$data = explode('; ', $record);
			
			$persone[] = $persona;	
		//}
		
		return $persone;
	}
	
	
	public static function aggiungiPersona($persona) {

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
}