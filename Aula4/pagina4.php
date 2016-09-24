<?php

//Prepared Statement
$s = "INSERT (nome, senha) VALUES (%s, %s)";

$query = sprintf($s, htmlspecialchars('marcos'), htmlspecialchars('4linux'));

//mysql_query($query);
echo $query;