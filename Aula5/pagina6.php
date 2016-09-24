<?php
	$resultado = null;

	function fatorial($x){
		$j = $x;
		for ($i = 1; $i < $x; $i++){
			$j = $j * $i;
		}
		return $j;
	}

	if(isset($_GET['value'])){
		$resultado = fatorial($_GET['value']);
	}

	/*
//Metodo do Rafael
function f($x){
	If(!$x) return 1;
	return $x * f($x - 1);
}
	*/
?>
<html>
	<head>
		<title>Fatorial</title>
	</head>

	<body>
		<form action="pagina6.php" method="GET">
			<input type="text" name="value"/>
			<input type="submit" name="calcular"/>
		</form>

		<div>
			Resposta: Fatorial de <?=$_GET['value']?> eh 
			<?php if ($resultado != null): ?>
				<?= $resultado ?>
			<?php endif?>
		</div>

	</body>

</html>