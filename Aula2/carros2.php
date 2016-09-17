<html lang="pt-br">

	<head>
		<meta charset="utf-8"/></meta>
		<title>Meus Carros</title>
	</head>

	<body>
		<h1>
			Meus Carros.net
			<table border="2">
				<thead>
					<th>Coluna1</th>
					<th>Coluna2</th>
				</thead>
				<tbody>
					<?php
						require "array/dono_carros.php";
						require "array/carros_db.php";
						
				

						foreach($array as $chave => $valor){
							echo "<br />$chave ===> $valor";
						}

						echo "<hr>";

						foreach ($carros as $carro){
							echo "$carro<br />";
						}
					?>
				</tbody>
			</table>

		</h1>
	</body>
</html>