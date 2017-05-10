<?php
	if($_SERVER['REQUEST_METHOD']=="GET"){
		
		if(!empty($_GET['txtfilmenome'])){
			$nome = $_GET['txtfilmenome'];
		}
		if(!empty($_GET['lstcategoria'])){
			$categoria = $_GET['lstcategoria'];
		}
		include('bibliotecas/connection.php');
		if(!empty($categoria)){
			$connstr = "select * from filme where upper(nome) like upper('%$nome%') and codcat = $categoria";
			$query = mysqli_query($conn, $connstr); 
		}else{
			$connstr = "select * from filme where upper(nome) like upper('%$nome%')";
			$query = mysqli_query($conn, $connstr); 
		}
		
		echo mysqli_error($conn);
		
		mysqli_close($conn);
		
	}
?>
</div>
<div class="row content">
	<?php
		while($row=mysqli_fetch_assoc($query)){
	?>
	<div class="col-sm-1" style="text-align:center;border:1px solid black; border-radius:20px; height:150px;">
	<?php
		echo 'Código: ' . $row["cod"] . '<br>';
		echo 'Título: ' . $row["nome"];
	?>
	</div>
	<?php
	}
	?>
</div>