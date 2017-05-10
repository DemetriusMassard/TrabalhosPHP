<form method="GET" action="index.php">
	Nome: <input type="text" name="txtfilmenome"  class="form-control"id="txtfilmenome">
	Categoria:
	<select name="lstcategoria" id="lstcategoria" class="form-control">
		<option value=''>--</option>
	<?php
		$host="127.0.0.1:3306";
		$user="root";
		$pass="";
		$con = mysql_connect($host,$user,$pass);
		
		mysql_select_db("locanet", $con);
		
		$connstr = "select * from categoria";
	
		$query = mysql_query($connstr, $con); 
		
		while($row=mysql_fetch_assoc($query)){
			printf ("<option value='%d'>%s</option>",$row["cod"], $row["nome"]);
		}
		
		mysql_close($con);
	?>
	</select><br>
	<input type="submit" value="Buscar">
	
</form>