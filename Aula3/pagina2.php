<?php require "common.php" ?>
<html>
	<head>
		<title>Pagina2</title>
	</head>

	<body>
		<?php
			
		$minha_func = function($valor){
			return $valor + 10;
		};

		echo $minha_func(-10) . "<br />";

		?>

	</body>
</html>