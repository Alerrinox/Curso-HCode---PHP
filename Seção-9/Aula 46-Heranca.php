<?php 

	class Documento{

		private $numero;

		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($n){
			$this->numero = $n;
		}

	}

	class CPF extends Documento{

		public function validar():bool{

			//Validação do CFP
			return true;

		}

	}

	$doc = new CPF();
	$doc->setNumero("99998198189");

	var_dump($doc->validar());

	echo "<br>";
	echo $doc->getNumero();
 ?>