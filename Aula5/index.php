<?php
if(! isset($_SESSION)) session_start();

if(! isset($_SESSION['email'])){
	header('Location: pagina5.php');
}
?>
<html>
	<head>
		<title><?= $_SESSION['nome'] ?> || MeuSite.com.br</title>
	</head>
	<body>
		<center>
			<h1>MeuSite</h1>
			<p> Logado: <?= $_SESSION['email'] ?></p>
			<p> Senha: <?= $_SESSION['senha'] ?></p>
			<a href= "logout.php">Sair</a>
		</center>

	</body>
</html>