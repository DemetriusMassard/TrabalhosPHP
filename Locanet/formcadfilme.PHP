<html>
	<head>
	<body>
	<?php
		$Nome="";
		$duracaodofilme=0;
		$categoria=0;
		$sinopse="";
		$imagencapa="";
	?>

		<fieldset class="col-sm-6">
			<form action="cadfilme.php" method="POST">
			Nome       <br>   <input class="form-control" name="nome" id="txtnome" type="text"/></br></br>
			duracaodofilme<br><input class="form-control" name="duracaodofilme" id="txtnome" type="text"/></br></br>
			categoria  <br>   <input class="form-control" name="categoria" id="txtnome" type="text"/></br></br>
			sinopse    <br>   <input class="form-control" name="sinopse" id="txtnome" type="text"/></br></br>
			imagencapa <br>   <input class="form-control"  name="imagencapa" id="txtnome" type="text"/></br></br>
			<input type="submit" value="Confirmar"/>
			</form>
		</fieldset>

<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
    $nome=$_POST['nome'];
    $duracaodofilme=$_POST['duracaodofilme'];
    $categoria=$_POST['categoria'];
    $sinopse=$_POST['sinopse'];
    $imagencapa=$_POST['imagencapa'];

    $host="127.0.0.1:3306";
        $user="Kappa";
        $pass="kappapride";
        $con = mysqli_connect($host,$user,$pass);

        mysqli_select_db($con, "locanet");

        $connstr= "insert into filme(nome,codcat,sinopse,capa,duracao)
    values('$nome',$categoria,'$sinopse','$imagencapa',$duracaodofilme)";

        $query = mysqli_query($con,$connstr);
	echo mysqli_error($con);
        mysqli_close($con);
    }
?>
	</body>
	</head>
</html>