
<?php 
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include('bibliotecas/connection.php');
		if(!empty($_POST['nome'])){
			$nome = $_POST['nome'];
		}
		if(!empty($_POST['user'])){
			$user = $_POST['user'];
		}
		if(!empty($_POST['pass'])){
			$pass = $_POST['pass'];
		}
		$connstr = "insert into usuario(nome, user, pass) values('$nome', '$user', '$pass');";
		
		$query = mysqli_query($conn, $connstr);
		
		echo mysqli_error($conn);
		header('location: register.php');
		
	}
?>