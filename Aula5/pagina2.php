<?php 
if (isset($_GET['username'])){
	echo "Seja bem vindo, " . $_GET['username'];
}
else{
	echo "<div class='alert alert-danger'>";
	echo "Voce precisa especificar o 'username'";
	echo "</div>";
}
?>

<html>
	<head>
		<?php require "../Aula2/bootstrap.php"; ?>
		<title>FORM | METHOD :: GET</title>
	</head>

	<body>
		<form method="GET" action="pagina2.php">

			<div class="form-group">
				<label>Nome: </label>
				<input type="text" class="form-control" name="username" />
			</div>

			<input type="submit" value="enviar" class="btn btn-primary" />

		</form>

	</body>


</html>

