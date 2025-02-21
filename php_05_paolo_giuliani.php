<?php
$numeri = [12, 27, 5, 38, 22, 98, 19, 33, 88, 256];

$conteggio = 0;
$totale = 0;

foreach($numeri as $numero){
    if($numero %2 == 0){
    $totale += $numero;
    $conteggio ++;
}
}
echo $totale/$conteggio;