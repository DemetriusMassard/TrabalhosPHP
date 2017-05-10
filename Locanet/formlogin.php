
<fieldset class="col-sm-6">
	<form action="login.php" method="post">
		<span class="campo">User</span><br> <input name="user" id="txtuser" class="form-control" type="text"/><br/>
		<span class="campo">Senha</span><br> <input name="pass"class="form-control" id="txttelefone" type"/><br>
		<input type="submit" value="Enviar"/>
	</form>
</fieldset>

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
		$connstr = "select * from usuario where user = '$user' and pass = '$pass';";
		
		$query = mysqli_query($conn, $connstr);
		
		while($row=mysqli_fetch_assoc($query)){
			echo $row["User"] . "<br>" . $row["Nome"];
		}
		echo mysqli_error($conn);
		
		
	}
?>