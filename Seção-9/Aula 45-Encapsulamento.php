<?php 

	class Pessoa{

		public $nome = "Rasmus Lerdorf"; //Acesso a todos
		protected $idade = 18; // pode herdado
		private $senha = "123456"; // Acesso apenas a classe por um metodo

		public function verDados(){
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";
		}

	}

	class Programador extends Pessoa{
		
		public function verDados(){
			echo get_class($this)."<br>";
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";
		}
		
	}

	//$objetoDireto = new Pessoa();
	//echo $objetoDireto->nome."<br>";
	//echo $objetoDireto->idade."<br>";
	//echo $objetoDireto->senha."<br>";

	//$objetoDireto->verDados();

	$objetoDireto = new Programador();
	$objetoDireto->verDados();
	

 ?>