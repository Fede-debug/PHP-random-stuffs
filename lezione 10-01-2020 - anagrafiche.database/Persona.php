<?php
require_once 'Indirizzo.php';

class Persona 
{
	private $id;
	private $nome;
	private $cognome;
	private $dataNascita;
	private $indirizzoResidenza;
	private $codiceFiscale;
	private $indirizzoDomicilio;
	private $email;
	private $telefono;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getCognome() {
		return $this->cognome;
	}
	public function setCognome($cognome) {
		$this->cognome = $cognome;
	}
	
	public function getDataNascita() {
		return $this->dataNascita;
	}
	public function setDataNascita($dataNascita) {
		$this->dataNascita = $dataNascita;
	}
	
	public function getIndirizzoResidenza() : Indirizzo{
		return $this->indirizzoResidenza;
	}
	public function setIndirizzoResidenza(Indirizzo $indirizzoResidenza) {
		$this->indirizzoResidenza = $indirizzoResidenza;
	}
	
	public function getIndirizzoDomicilio() : Indirizzo {
		return $this->indirizzoDomicilio;
	}
	public function setIndirizzoDomicilio(Indirizzo $indirizzoDomicilio) {
		$this->indirizzoDomicilio = $indirizzoDomicilio;
	}
	
	public function getCodiceFiscale() {
		return $this->codiceFiscale;
	}
	public function setCodiceFiscale($codiceFiscale) {
		$this->codiceFiscale = $codiceFiscale;
	}
	
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getTelefono() {
		return $this->telefono;
	}
	public function setTelefono($telefono) {
		$this->telefono = $telefono;
	}
}
?>