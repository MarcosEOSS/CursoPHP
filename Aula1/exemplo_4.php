<?php

//Lacos de Repeticao

echo "+=============================== CHERNOBYL==================================+\n";
$num = 0;

while (($num +=5) <=100){
	echo "\rApagando os arquivos do seu computador: $num%";
	sleep(1);
}

echo "\n";