<?php
class Comune {
	private $id;
	private $nome;
	private $provincia;
	private $regione;
	private $stato;
	
	public function getId(){
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getProvincia(){
		return $this->provincia;
	}
	public function setProvincia($provincia) {
		$this->provincia = $provincia;
	}
	
	public function getRegione(){
		return $this->regione;
	}
	public function setRegione($regione) {
		$this->regione = $regione;
	}
	
	public function getStato(){
		return $this->stato;
	}
	public function setStato($stato) {
		$this->stato = $stato;
	}
}
?>