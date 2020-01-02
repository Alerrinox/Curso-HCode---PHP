<?php 

	class Endereco{
		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($a ,$b ,$c ){
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;

		}

		public function __destruct(){
			echo 'destruir';
		}

	}


	$meuEndereco = new Endereco("Rua Castelo de Areia","71","Belo Horizonte");
	//unset($meuEndereco);
	var_dump($meuEndereco);
	
 ?>