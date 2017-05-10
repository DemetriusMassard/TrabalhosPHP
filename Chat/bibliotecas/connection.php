<?php
	include('config.php');
	$conn = mysqli_connect($server, $user,$pass);
	if($conn!=NULL){
		mysqli_set_charset($conn,'utf8');
		mysqli_select_db($conn,$bd);
		echo mysqli_error($conn);
	
	}else{
		echo 'não foi possível conectar ao banco ' . $bd . ' erro: ' . $mysql_error();
	}
?>