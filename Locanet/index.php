<!DOCTYPE html>
<html lang="br">
	<head>
		<title>Locanet</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
			$nome = "";
			$categoria = 0;
		?>
		<?php include('topo.php');?>
		<div class="container-fluid text-center">
			<div class="row content">
				<?php include('sidenav.php'); ?>
				<div class="col-sm-10 text-left">
					<h1>Consulta de Filmes</h1>
					<div class="col-sm-6 hidden-xs">
						<fieldset>
							<?php include('formbuscafilme.php');?>
						</fieldset>
					</div>
					<?php include('resultbusca.php');?>
				</div>
			</div>
		</div>

		<footer class="container-fluid text-center">
			<p>Footer Text</p>
		</footer>
	</body>
</html>

