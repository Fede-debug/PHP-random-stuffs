<?php 
class EssereVivente {
	protected $tipo;
	public function miNutro() {
		echo "Mi nutro<br>";
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function setTipo($tipo) {
		 $this->tipo = $tipo;
	}
}

class Animale extends EssereVivente {
	private $specie;
	public function __construct() {
		$this->tipo = "Animale";
	}
	public function getSpecie() {
		return $this->specie;
	}
	public function setSpecie($specie) {
		$this->specie = $specie;
	}
	public function miNutro() {
		echo "Mangio<br>";
	}
	public function miNutroDaEssereVivente() {
		parent::miNutro();
	}
} 


class Cane extends Animale {
	public function __construct() {
		parent::__construct();
		//$this->setSpecie("Canidae");
	}
	
	public function getSpecie() {
		parent::getSpecie();
		//echo "vardump in getspecie" . var_dump(parent::getSpecie());
	}
	
	
	public function setSpecie($specieCane) {
		parent::setSpecie($specieCane . " Cane");
		echo "vardump in setspecie" . var_dump(parent::getSpecie());
	}
}
$cane = new Cane();
echo "Tipo: " . $cane->getTipo() . "<br>";
$cane->setSpecie("labradoer");
echo "Specie: " . $cane->getSpecie();

//var_dump($cane->getSpecie());

?>

