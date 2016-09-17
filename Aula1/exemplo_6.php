<?php
// for (init; <expression>; <operation>)


//FOR de 0 a 20
echo "\n==================== FOR-1====================\n";
for ($i = 0; $i <= 20; $i++){
	echo "Contador: $i\n";
}
echo "\n==================== FOR-1====================\n";

//FOR de 20 a 0
echo "\n==================== FOR-2====================\n";
for ($i = 20; $i >= 0; $i--){
	echo "Contador: $i\n";
}
echo "\n==================== FOR-2====================\n";

//FOR PARA TODOS OS ELEMENTOS DE ARRAY
echo "\n==================== FOR-3====================\n";
$times = ["Sao Paulo", "Santos", "Palmeiras", "Corinthians"];
	
/*for ($i = 0; $i < count($times); $i++){
	//echo"".($i+1) . " | " . $times[$i]."\n";
	$string = sprintf("%d | %s", ($i+1), $times[$i]);
	echo "$string\n";
}*/

foreach ($times as $time => $i) {
	$string = sprintf("%d | %s", ($i+1), $time[$i]);
	echo "$string\n";
}

echo "\n==================== FOR-3====================\n";

echo "\n==================== FOR-4====================\n";

$alfabeto = "abcdefghijklmnopqrstuvwxyz";

/*for ($i = 0; $i < strlen($alfabeto); $i++){
	echo "$alfabeto[$i] \n";
}*/

for ($i = 0, $n = strlen($alfabeto); $i < $n; $i++){
	echo "$alfabeto[$i] \n";
}
echo "\n==================== FOR-4====================\n";

echo "\n==================== FOR-5====================\n";
//CONTINUE
for ($i = 0; $i < 20; $i++){
	if($i == 3){
		continue;
	}
echo "Contador: $i\n";
}

echo "\n==================== FOR-5====================\n";

echo "\n==================== FOR-6====================\n";
//BREAK
for ($i = 0; $i < 20; $i++){
	if($i == 3){
		break;
	}
echo "Contador: $i\n";
}


echo "\n==================== FOR-6====================\n";

echo "\n==================== FOR-7====================\n";
//mostrar apenas numeros impares com CONTINUE
for ($i = 1; $i <= 100; $i++){
	if(($i % 2) == 0){
		continue;
	}
echo "$i\n";
}
echo "\n==================== FOR-7====================\n";

for ($i = 1; $i <= 100; $i++){
	
	for($j = 2; $j <= $i; $j++){
		If($i % $j) != 0){
			continue;
		}

	}

echo "$i\n";
}