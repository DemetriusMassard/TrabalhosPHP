<?php
	include('../model/MBusca.php');
	$busca = new MBusca();
	if(!empty($_GET['txtfilmenome'])){
		$nome = $_GET['txtfilmenome'];
	}
	if(!empty($_GET['lstcategoria'])){
		$categoria = $_GET['lstcategoria'];
	}
	$busca->exibeBusca();
?>