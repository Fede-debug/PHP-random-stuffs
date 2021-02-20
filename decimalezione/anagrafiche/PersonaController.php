<?php

require_once 'Persona.php';
require_once 'Indirizzo.php';
require_once 'Comune.php';

class PersonaController{
	
	public function caricaPersone(){
		
		$persone = [];
		
		$info = file('dati.csv');
		foreach($info as $record){
			$data=explode(';',$record);
			$persona= new Persona();
			
			$persona->setCognome($data[0]);
			$persona->setNome($data[1]);
			$persona->setDataNascita($data[2]);
			//$persona->setIndirizzoResidenza($data[3]);  //devo creare un oggetto di tipo Indirizzo!
			$persona->setCodiceFiscale($data[10]);
			$persona->setEmail($data[18]);
			$persona->setTelefono($data[19]);
			
			$indirizzoResidenza= new Indirizzo();  //creo oggetto per indirizzo residenza
			$indirizzoResidenza->setVia($data[3]);
			$indirizzoResidenza->setCivico($data[4]);
			$indirizzoResidenza->setCap($data[5]);
			
			$comuneResidenza= new Comune();      //creo oggetto classe Comune
			$comuneResidenza->setNome($data[6]);
			$comuneResidenza->setProvincia($data[7]);
			$comuneResidenza->setRegione($data[8]);
			$comuneResidenza->setStato($data[9]);
			
			$indirizzoResidenza->setComune($comuneResidenza);  //metto dentro oggetto di classe Indrizzo l'ogetto classe Comune
			
			$persona->setIndirizzoResidenza($indirizzoResidenza);  // metto l'oggetto Indirizzo dentro oggetto Persona (residenza)
			
			$indirizzoDomicilio= new Indirizzo();  //creo oggetto per indirizzo domicilio
			$indirizzoDomicilio->setVia($data[11]);
			$indirizzoDomicilio->setCivico($data[12]);
			$indirizzoDomicilio->setCap($data[13]);
			
			$comuneDomicilio= new Comune();      //creo oggetto classe Comune
			$comuneDomicilio->setNome($data[14]);
			$comuneDomicilio->setProvincia($data[15]);
			$comuneDomicilio->setRegione($data[16]);
			$comuneDomicilio->setStato($data[17]);
			
			$indirizzoDomicilio->setComune($comuneDomicilio);  //metto dentro oggetto di classe Indrizzo l'ogetto classe Comune
			
			$persona->setIndirizzoDomicilio($indirizzoDomicilio); // metto l'oggetto Indirizzo dentro oggetto Persona (domicilio)
			
			
			
			$persone[]= $persona;  //aggiungo l'oggetto così impostato in un array di oggetti
		}
		return $persone;    //restituisco array degli ogetti $persona
	}
}