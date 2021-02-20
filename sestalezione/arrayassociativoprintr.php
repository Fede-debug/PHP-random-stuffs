<html>
	<body>
		<pre>

<?php
$opere = [
	"Otello" => ["Autore" => "Giuseppe Verdi", "anno" => 1887 ],
	"Boheme" => ["Autore" => "Giacomo Pucini", "anno" => 1895 ]
];
print_r($opere);

$opere=
array(
            array(
                "titolo"=>"Otello",
                "artista"=>"Giuseppe Verdi",
                "anno"=>1887
                ),
            array(
                "titolo"=>"Boheme",
                "artista"=>"Giacomo Puccini",
                "anno"=>1895
                   )
         );	
		 
print_r($opere);

$elencopersone= [["nome" => "pippo", "cognome"=>"rossi"],
                ["nome" => "topolino", "cognome"=>"bianchi"],
                ["nome" => "minnie", "cognome"=>"brown"]];

print_r($elencopersone);

$elencopersone= [
                 "001" =>["nome" => "pippo", "cognome"=>"rossi"],
                 "334"=>["nome" => "topolino", "cognome"=>"bianchi"],
                 "267"=>["nome" => "minnie", "cognome"=>"brown"]
				 ];	

print_r($elencopersone);
print_r($elencopersone["334"]);  //stampo solo un array
$elencopersone["334"]["nome"]= "giulia"; //modifico valore
print_r($elencopersone["334"]);  


$opere=
array(
            "primo" => array(
                "titolo"=>"Otello",
                "artista"=>"Giuseppe Verdi",
                "anno"=>1887
                ),
            "secondo" => array(
                "titolo"=>"Boheme",
                "artista"=>"Giacomo Puccini",
                "anno"=>1895
                   )
         );	
		 
print_r($opere);
				 
?>

		</pre>
	</body>
</html>	