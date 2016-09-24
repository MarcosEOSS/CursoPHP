<?php 
	if (isset($_GET['id'])){
	echo "Voce esta acessando a pagina " . $_GET['id'];
}
	$paginas = array(1,2,3,4,5,6);
?>

<html>
	<head>
		<?php require "../Aula2/bootstrap.php"; ?>
		<title>PAGINACAO | METHOD :: GET</title>
	</head>

	<body>
		<nav aria-label="Navegacao por pagina">
			<ul class="pagination">
				<li>
					<a href="<?id=<?=$pagina-1 ?> aria-label="Anterior">
        				<span aria-hidden="true">&laquo;</span>
			      	</a>
		      	</li>

			<?php foreach ($paginas as $pagina):?>
				<li>
					<a href="?id=<?=$pagina ?>">
					<?= $pagina ?>
					</a>
				</li>
			<?php endforeach?>
				<li>
				 	<a href="#" aria-label="Proximo">
				 		<span aria-hidden="true">&raquo;</span>
				    </a>
				</li>
			</ul>
		</nav>

	</body>


</html>