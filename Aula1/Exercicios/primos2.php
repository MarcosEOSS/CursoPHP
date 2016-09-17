<?php

/**
* Funcao para verificar 
* se o numero eh primo.
*/

function eh_primo($numero){
	if ($numero % 2 ==0 && $numero != 2)
			return false;

	$counter = 0;
	for ($j = 1; $j <= $numero; $j++){
		if($numero % $j == 0){
			$counter +=1;
		}
		if ($counter > 2)
			return false;
	}

	return $counter == 2;

}

/**
* Funcao para calcular os valores primos
* ate o ultimo_valor que eh passado por
* parametro desta funcao.
*/

function primos ($ultimo_valor){
	for ($i = 2; $i <= $ultimo_valor; $i++){
		if (eh_primo($i)){
			//echo "Primo: $i \n";
		}
	}
}

primos(10000);