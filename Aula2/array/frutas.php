<?php
// array_merge($c, $v);

function _merge($chaves, $valores){
	$resultado = array();
	for ($i = 0, $n = count($chaves); $i < $n; $i++):
			//$chave = $chaves[$i];
			//$valor = $valores[$i];
			//$resultado[$chave] = $valor;
			$resultado[$chaves[$i]] = $valores[$i];
	endfor;
		
	return $resultado;
}


$c = array('rafael', 'lucas', 'joana', 'viviane');
$v = array('maca', 'banana', 'pera', 'morango');

$resultado = _merge($c, $v);