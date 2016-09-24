<?php
//Pagina1.php

$string = "Marcos eduardo";
//str to upper (string to upper case)

echo "<h2>strtoupper(string)</h2></br>";
echo strtoupper($string);
echo "<hr>";


echo "<h2>strtolower(string)</h2></br>";
echo strtolower($string);
echo "<hr>";

echo "<h2>ucfirst(string)</h2></br>";
echo ucfirst($string);
echo "<hr>";

echo "<h2>str_repeat(string, multiplicador)</h2></br>";
echo str_repeat("#", 10);
echo "<hr>";

echo "<h2>str_replace(search, valor_novo, novo_procurado)</h2></br>";
echo str_replace('Oi', 'Tchau', "Oi Mundo");
echo "<hr>";

echo "<h2>substr(string, posicao, [tamanho_string (opcional)])</h2></br>";
echo substr("ABCDEFGHIJ", 3, 6);
echo "<hr>";

echo "<h2>strpos(valor, pesquisa)</h2></br>";
echo strpos("0123456789", '7') . "<br />";
echo strpos("0123456789", '9') . "<br />";
echo strpos("0123456789", 'A') . "<br />";
echo "<hr>";

echo "<h2>strstr(valor, pesquisa)</h2></br>";
echo strstr("meu.nome@4linuxmelhor.com.br", '@');
echo "<hr>";

echo "<h2>trim(string)</h2></br>";
$s = '          SEJA BEM VINDO          ';
var_dump($s);
echo trim($s);
var_dump(trim($s));
echo "<hr>";



