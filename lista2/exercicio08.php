<?php

//Programa que mostra se a pessoa pode ou não votar levando em conta sua idade;

$idade = 69;

$resultado = function($idade){
   if($idade < 16){
    return 'não pode votar';
   }

   else if($idade >15 && $idade <18 || $idade > 59){
    return 'voto não obrigatório';
   }

   else{
    return 'voto obrigatório';
   }
};

echo $resultado($idade);