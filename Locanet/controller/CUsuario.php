<?php
	include("..\model\MUsuario.php");
	$user = new MUsuario();
	$user->id = 0;
	$user->nome = $_POST['nome'];
	$user->email = $_POST['email'];
	$user->telefone = $_POST['telefone'];
	$user->genero = $_POST['genero'];
	$user->CEP = $_POST['cep'];
	$user->exibirdados();
?>