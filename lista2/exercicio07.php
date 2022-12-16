<?php 

//mostre a tabuada do 1 até o 10;

$multiplicadores = [1,2,3,4,5,6,7,8,9,10];

foreach($multiplicadores as $multiplicador){
    
    for($i=0;$i<=sizeof($multiplicadores);$i++){
        $resultado = $multiplicador * $i;
        echo "$multiplicador * $i = $resultado \n";
    }
    
    echo "\n";
}