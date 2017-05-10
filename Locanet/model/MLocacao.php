<?php
	class MLocacao{
		public $cpf;
		public $filme;
		function exibirInfo(){
			echo $this->cpf . "<br>";
			echo $this->filme . "<br>";
		}
	}
?>