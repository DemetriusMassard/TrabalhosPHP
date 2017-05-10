<?php
	class MBusca{
		public $nome;
		public $categoria;
	
		function exibeBusca(){
			if($_SERVER['REQUEST_METHOD']=="GET"){
				$host="127.0.0.1:3306";
				$user="Kappa";
				$pass="kappapride";
				$con = mysqli_connect($host,$user,$pass);
				
				mysqli_select_db($con, "locanet");
				if(!empty($categoria)){
					$connstr = "select * from filme where upper(nome) like upper('%$this->nome%') and codcat = $this->categoria";
					$query = mysqli_query($con, $connstr); 
				}else{
					$connstr = "select * from filme where upper(nome) like upper('%$this->nome%')";
					$query = mysqli_query($con, $connstr); 
				}
				
				echo mysqli_error($con);
				
				mysqli_close($con);
				
			}
			?>
			
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
			<?php
		
		
		}
	}
?>