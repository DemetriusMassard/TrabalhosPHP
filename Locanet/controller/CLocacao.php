<?php
	include('..\model\MLocacao.php');
	$locacao = new MLocacao();
	$locacao->cpf = $_POST['cpfcli'];
	$locacao->filme = $_POST['codfilme'];
	$locacao->exibirInfo();
?>