<html lang="pt-br">

	<head>
		<meta charset="utf-8"/></meta>
		<title>Minha primeira pagina</title>
	</head>

	<body>
		<h1>
			<?php echo "Welcome!!"?>
			<table border="2">
				<thead>
					<th>Coluna1</th>
					<th>Coluna2</th>
				</thead>
				<tbody>
					<?php
						for ($i = 1;$i <= 10; $i++){
							echo "<tr>";
							echo "<td>Campo${i}.1</td>";
							echo "<td>Campo${i}.2</td>";
							echo "</tr>";

					}?>
				</tbody>
			</table>

		</h1>
	</body>
</html>