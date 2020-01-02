<?php 
	//Objetivo é uma variavel que representação ou tira uma copia da class(ATRIBUTO e METODO)
	
	class Pessoa {

		public $nome; //atributo

		public function falar(){
			return "O meu nome é ".$this->nome; //metodo
		}

	}
	
	$Pessoa01 = new Pessoa();
	$Pessoa01->nome = "Rafael Barros";
	echo $Pessoa01->falar();


 ?>