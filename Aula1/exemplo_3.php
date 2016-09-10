<?php

//Pegar Entrada do Usiario
echo "Opcao: ";
$opt = readline();

switch ($opt) {

	case 1:
		echo "Cadastrar usuarios...\n";
	break;

	case 2:
		echo "Listar usuarios...\n";
	break;

	case 3:
		echo "Excluir usuarios...\n";
	break;

	default:
		echo "Opcao nao valida\n";
}