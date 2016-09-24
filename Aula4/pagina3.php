<?php
//Pagina3.php

$skils_a = array("PHP, Test Driven Development, Scrum");
$skils_b = "PHP, Test Driven Development, Scrum";

echo "<h2>implode(glue,pieces)</h2>";
$value = implode($skils_a, ',');
var_dump($value);
echo "<hr>";

echo "<h2>explode(demiliter,string)</h2>";
$value = explode(',', $skils_b);
var_dump($value);
echo "<hr>";


