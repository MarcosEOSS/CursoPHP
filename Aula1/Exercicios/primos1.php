<?php
/**
* Funcao para calcular os valores primos
* ate o ultimo_valor que eh passado por
* parametro desta funcao.
*/

function primos ($ultimo_valor){
	for ($i = 2; $i <= $ultimo_valor; $i++){
		if ($i % 2 ==0)
			continue;
		$counter = 0;
		for ($j = 1; $j <= $i; $j++){
			if($i % $j == 0){
				$counter +=1;
			}
		}
	}
}

primos(10000);