<?php require "common.php" ?>
<html>
	<head>
		<title>Pagina3</title>
	</head>

	<body>
		<?php
		
		$valores = [1, 2, 3, 4, 5, 6, 7, 8, 9];

		$func = function($n){
			return ($n % 2 == 1);
		};

		$valores_filtrados = my_filter($valores, $func);

		var_dump ($valores_filtrados);
		?>

	</body>
</html>