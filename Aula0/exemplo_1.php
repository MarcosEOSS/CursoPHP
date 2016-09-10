<?php

// TODO: Colocar a conexao do banco AQUI.

$string = "String";
$inteiro = 10;
$float = 10.2;
$sub_array = ["Sao Paulo", "Santos","Palmeiras",6,3.1,4];
$array = ["Azul", "Amarelo", "Rosa", "Vermelho", 29, 67.5, $sub_array];

var_dump($array);

echo "$sub_array[0] \n$array[3] \n";