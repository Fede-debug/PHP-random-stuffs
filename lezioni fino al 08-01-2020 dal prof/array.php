<html>
<body>
<?php
$giorni = array("lunedì", "martedì", "mercoledì", "giovedì", "venerdì", "sabato", "domenica");

$giorni = ["lunedì", "martedì", "mercoledì", "giovedì", "venerdì", "sabato", "domenica"];

//$giorni[0] = "lunedì";
//$giorni[1] = "martedì";

?>
<pre>
<?php
print_r($giorni);

?>

</pre>

<?php

var_dump($giorni);

echo "<br>";


echo $giorni[2];

$giorni[4] = "Venerdì";

$giorni[count($giorni)] = "DOMENICA";

$giorni[] = "LUNEDI'";

print_r($giorni);
?>

<br>

<?php 
$i = 0;
while($i <= count($giorni) - 1) { // while($i < count($giorni))
	echo $giorni[$i] . " ";
	$i++;
}

echo $giorni[18];

echo "<br>";

for($i=0; $i< count($giorni); $i++) {
	echo $giorni[$i] . " ";
}

echo "<br>";
for($i=count($giorni) - 1; $i >= 0; $i--) {
	echo $giorni[$i] . " ";
}

?>

</body>
</html>