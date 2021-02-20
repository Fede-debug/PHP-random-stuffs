<?php
class MiaClasse {
	private $prop1 = 5;
	public $prop2 = "Hello, World!";
	protected $prop3 = true;
}

$oggetto = new MiaClasse();
//echo "\$prop1: " . $oggetto->prop1 . "<br>";
echo "\$prop2: " . $oggetto->prop2 . "<br>";
//echo "\$prop3: " . $oggetto->prop3 . "<br>";
?>
