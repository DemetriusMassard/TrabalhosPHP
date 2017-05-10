<?php
	if(!empty($_GET['name'])){
		$name = $_GET['name'];
	}
	if(!empty($_GET['idade'])){
		$idade = $_GET['idade'];
	}
	if(!empty($_GET['email'])){
		$email = $_GET['email'];
	}
	$host="127.0.0.1:3306";
	$user="root";
	$pass="";
	$con = mysql_connect($host,$user,$pass);
	if($con) {
		echo '<h1>Connected to MySQL</h1>';
	} else {
		echo '<h1>MySQL Server is not connected</h1>';
	}
	mysql_select_db("phpstudy", $con);
	
	$connstr = "INSERT INTO teste(nome, idad,emai) values('$name', $idade ,'$email')";
	
	$query = mysql_query($connstr, $con); 
	echo "$query";
	if(!$query){
		echo"non <br>". mysql_error();
	}
	mysql_close($con);
?>