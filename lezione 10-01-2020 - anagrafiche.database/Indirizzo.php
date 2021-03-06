<?php
require_once 'Comune.php';
class Indirizzo
{
	private $via;
	private $civico;
	private $comune;
	private $cap;
	
	public function getVia(){
		return $this->via;
	}
	public function setVia($via) {
		$this->via = $via;
	}
	
	public function getCivico(){
		return $this->civico;
	}
	public function setCivico($civico) {
		$this->civico = $civico;
	}
	
	public function getComune() : Comune{
		return $this->comune;
	}
	public function setComune( Comune $comune) {
		$this->comune = $comune;
	}
	
	public function getCap(){
		return $this->cap;
	}
	public function setCap($cap) {
		$this->cap = $cap;
	}
}
?>