<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	</head>
	<body>
	<?php
		include('bibliotecas/connection.php');
		
		if($_SERVER['REQUEST_METHOD']=="POST"){
			
			$apelido = $_POST['apelido'];
			if($_POST['acao']=="enviarmensagem"){
				$mensagem = $_POST['mensagem'];
				if(!empty($mensagem)){
					$comando ="insert into mensagem(apelido, mensagem) values('$apelido', '$mensagem');";
				
				mysqli_query($conn, $comando);
				}
				echo mysqli_error($conn);
			}
		}
	?>
		<div class="container">
			<div class="row">
				<div style="border:1px solid black; border-radius:20px 20px 0px 0px;height:500px;padding:10px 0px 20px 20px;overflow:auto;"class="col-sm-6 col-sm-offset-3">
					<?php
						$comando = "select * from mensagem order by id desc";
						$query = mysqli_query($conn, $comando);
						
							echo mysqli_error($conn);
						while($row=mysqli_fetch_array($query)){
							echo $row['apelido'] . ": " . $row['mensagem'] . "<br>";
						}
					
					?>
				</div>
				<div style="border:1px solid black; border-radius:0px 0px 20px 20px;"class="col-sm-6 col-sm-offset-3">
				<form action="mensagem.php" method="post">
					<div style="margin-top:10px;"class="row">
						<div class="col-sm-10">
						<input type="text" class="form-control" name="mensagem">
						</div>
						
						<div class="col-md-2">
						<input type="submit" class="btn btn-primary" value="enviar">
						</div>
						
						<input type="hidden" value="enviarmensagem" name="acao">
						
						<?php
							if($_SERVER['REQUEST_METHOD']=="POST"){
								if($_POST['acao']=="entrar"){
									$apelido = $_POST['apelido'];
									echo "<input type='hidden' value=" . $apelido . " name='apelido'>";
								}
								if($_POST['acao']=="enviarmensagem"){
									$apelido = $_POST['apelido'];
									
									echo "<input type='hidden' value=" . $apelido . " name='apelido'>";
								}
							}else{
								header('location:index.php');
							}
						?>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>