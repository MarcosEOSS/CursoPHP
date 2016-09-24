<?php
//YES! so php aqui

//usuario Hard Coded
$user = array(
	"email" => 'admin@localhost.com', 
	"senha" => '123456',
	"nome" => 'Administrador'
);

//Campos obrigatorios
$requireds = array('email', 'senha');

//Validar a chamada ao URL via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach ($requireds as $e){
		// Valida se o campo foi definido no html
		if(! array_key_exists($e, $_POST)){
			header('Location: pagina5.php?/error=missing_field');
		}
		// Valida se o campo nao possui valor vazio
		if (empty($_POST[$e])){
			header('Location: pagina5.php?/error=missing_field');
		}
	}
	//Atribuicao das variaveis do formulario login
	$login= $_POST['email'];
	$senha= $_POST['senha'];
	//Comparar login e senha do usuario
	if($login == $user['email'] && $senha == $user['senha']){

		if(! isset($_SESSION)) session_start();

		//definindo os dados persistindo entre paginas
		$_SESSION['email']= $login;
		$_SESSION['senha']= $senha;
		$_SESSION['nome']= $user['nome'];

		
		header('Location:index.php');
	}
	else{
		header('Location:pagina5.php?error=invalid_login');
	}
}
else{
	header('Location: pagina5.php');
}
