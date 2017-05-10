<?php
	class MUsuario{
		public $id;
		public $nome;
		public $idade;
		public $email;
		public $telefone;
		public $genero;
		public $CEP;
		
		function exibirDados(){
			echo $this->nome . '<br>';
			echo $this->email . '<br>';
			echo $this->telefone . '<br>';
			echo $this->genero . '<br>';
			echo $this->CEP . '<br>';
		}
		
	}
?>