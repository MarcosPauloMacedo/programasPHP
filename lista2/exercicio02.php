<?php

//programa que imprima todos os números pares de 100 até 1

$numero = 100;

while($numero >=0){
    if($numero % 2 == 0)
        echo $numero . PHP_EOL;

    $numero --;
}
