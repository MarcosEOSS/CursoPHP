<html lang="pt-br">

	<head>
		<meta charset="utf-8"/></meta>
		<title>Meus Carros</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
		crossorigin="anonymous">
	</head>

	<body>
		<h1>
			<table class="table table-hover">
				<thead>
					<th>Coluna1</th>
					<th>Coluna2</th>
				</thead>
				<tbody>
					<?php
						require "array/carros_db.php";

						for ($i = 0;$i < count($carros); $i++){
							echo "<tr>";
							echo "<td>Carro ${i}</td>";
							echo "<td> $carros[$i] </td>";
							echo "</tr>";

					}?>
				</tbody>
			</table>

		</h1>
	</body>
</html>