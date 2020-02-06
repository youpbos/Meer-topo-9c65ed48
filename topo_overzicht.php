<?php
$arr = [];
echo"Hoeveel landen ga je toevoegen?".PHP_EOL;
$hoeveelheid = readline("");

for($i = 1;$i <= $hoeveelheid; $i++){
    echo"Welk land wil je toevogen?".PHP_EOL;
    $a = readline("");
    echo"Wat is de hoofdstad van $a?".PHP_EOL;
    $b = readline("");
    $arr[$a] = $b;
    echo"de volgende lande staan in de database".PHP_EOL;
}
foreach($arr as $a => $b){   
    echo("$a".", "."$b").PHP_EOL;
}
?>
