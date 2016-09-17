<html>
	<head>
		<title>Usuarios logados</title>
		<?php require "bootstrap.php"; ?>
	</head>
	<body>
		
		<table class="table table-hover">
			<thead>
				<th>Nome</th>
				<th>Login</th>
				<th>Acoes</th>
			</thead>
			<tbody>
				<!--for ($i = 0, $n = count($users); $i< $n; $i++);
					$usuarios = $users[$i];
					echo "user['name'];
				-->
				<?php 
				require "array/usuarios.php";		
				foreach ($users as $usuarios): ?>

				<tr>
					<td><?=$usuarios['name']?></td>
					<td><?=$usuarios['login']?></td>
					<td>
						<button class="btn btn-success btn-sm">editar</button>
						<button class="btn btn-danger btn-sm">excluir</button>
					</td>
				</tr>
				<?endforeach?>
			
			</tbody>

		</table>

	</body>
</html>