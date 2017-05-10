<fieldset class="col-sm-6">
	<form action="reglocacao.php" method="POST">
		CPF do Cliente<input type="text" class="form-control" name="cpfcli" id="cpfcli"><br>
		Código do filme<input type="text" class="form-control" name="codfilme" id="codfilme"><br>
		<input type="submit" value="Confirmar"/>
	</form>
	<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
			include('bibliotecas/connection.php');
			$cpf = $_POST['cpfcli'];
			$codfilme = $_POST['codfilme'];
			$comando = "select cod from cliente where cpf = $cpf";
			$query = mysqli_query($conn,$comando);
			echo mysqli_error($conn);
			
			$row=mysqli_fetch_array($query);
			$codcli = $row['cod'];
			echo $codcli . "," . $codfilme;
			
			$comando = "insert into locacao(codcli, codfilme) values($codcli, $codfilme);";
			
			$query = mysqli_query($conn,$comando);
			echo mysqli_error($conn);
		}
	?>
</fieldset>