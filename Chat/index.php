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
		<div class="container">
			<div class="row">
				<div style="border:1px solid black; border-radius:20px;"class="col-sm-6 col-sm-offset-3">
					<form action="mensagem.php" method="post">
						<h3>Apelido</h3><br>
						<input type="text" class="form-control" name="apelido"><br>
						<input type="hidden" value="entrar" name="acao">
						<input type="submit" style="margin:auto;" class="btn btn-primary" value="Entrar">
					
					</form>
				</div>
			</div>
		</div>
	</body>
</html>