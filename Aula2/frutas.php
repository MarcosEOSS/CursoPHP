<html>
	<head>
		<title>Feira livre</title>
	</head>
	<body>
		<h2>Frutas</h2>
		<ul>
		<?php require "array/frutas.php"; ?>
			<?php foreach ($resultado as $chave => $valor): ?>
				<li>(<?= $chave ?>) => <?= $valor ?></li>
			<?php endforeach ?>
		</ul>
	</body>
</html>