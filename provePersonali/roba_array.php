
<?php
$veg = [ 0=>"pomodoro",
         2=>"piselli", 
         1=> "peperone", 
         4=> "funghi", 
         5=> "peperoncino" ];
        
foreach($veg as $item){
	echo $item . PHP_EOL;
}
print_r($veg);

$opere = [
	"Otello" => ["autore" => "Giuseppe Verdi", "anno" => 1887 ],
	"Boheme" => ["Autore" => "Giacomo Pucini", "anno" => 1895 ]
];
print_r($opere);

$frutta = ['Arance', 'Limoni', 'Pere', 'Mele', 'Mirtilli', 'Lamponi', 'Pesche', 'Fragole'];
print_r($frutta);
echo PHP_EOL;
$fruttaRimossa = array_splice ($frutta, 2, 2); //rimuovo Pere e Mele
print_r($frutta);
echo PHP_EOL;
echo "frutta rimossa: ";
print_r($fruttaRimossa);
echo PHP_EOL;
print_r($frutta);
//aggiungo Noci, Mandorle e Nocciole dove prima c'erano Mele e Pere
$fruttaSecca = ['Noci', 'Mandorle', 'Nocciole'];
array_splice ($frutta, 2, 0, $fruttaSecca);  
echo PHP_EOL;
print_r($frutta);

$a=array_values($opere);
var_dump($a);

shuffle($opere);   //cancella le keys 
print_r($opere);

//array splice non conserva le chiavi quando inserisco un array dentro un altro
