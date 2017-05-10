<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="media/css/style.css"/>
		<title>Hotelano</title>
	</head>
	<body>
		<div id="content">
			<div id="header">				
				<div id="banner">
					<img src="media/img/banner.jpg">
				</div>
				<div id="menu">
					<ul id="lismenu">
						<li><a href="index.php">Home</a></li>
						<li>Quartos</li>
						<li>Localização</li>
						<li><a href="contato.php"> Contato</a></li>
					</ul>
				</div>
			</div>
			<div id="middle">
				<div id="form">
					<form action="trataform.php" method="get">
						Nome: <input type="text" name="name" id="name"><br>
						Idade: <input type="text" name="idade" id="idade"><br>
						Email: <input type="text" name="email" id="email">
						<input type="submit" name="enviar">
					</form>
				</div>
				<?php
								
					$host="127.0.0.1:3306";
					$user="root";
					$pass="";
					$con=mysql_connect($host,$user,$pass);
					if($con) {
						echo '<h1>Connected to MySQL</h1>';
					} else {
						echo '<h1>MySQL Server is not connected</h1>';
					}
					mysql_select_db("phpstudy", $con);
					$connstr = "select * from teste";
					$in = mysql_query($connstr, $con); 
					while($row=mysql_fetch_assoc($in)){
									
					
						printf ("<img style='width:300px' src='%s'>",$row["emai"]);
					}
					if(!$in){
						echo"non <br>". mysql_error();
					}
					mysql_close($con);
				?>
			</div>
		</div>
	</body>
</html>