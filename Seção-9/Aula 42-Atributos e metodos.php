<?php 

	class Carro{

		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getMotor(){
			return $this->motor;
		}

		public function setMotor($motor){
			$this->motor = $motor;
		}

		public function getAno():int{
			return $this->ano;
		}

		public function setAno($ano){
			$this->ano = $ano;
		}

		public function exibir(){
			return array("modelo"=>$this->getModelo(),
						 "motor"=>$this->getMotor(),
						 "ano"=>$this->getAno()
						);
		}

	}

	$myCar = new Carro();
	$myCar->setModelo('118i');
	$myCar->setMotor("16v turbo"); 
	$myCar->setAno('2017');

	echo $myCar->getModelo();
	$exibir = $myCar->exibir();
	echo "<br>";

	foreach ($exibir as $caracteristicas) {
		echo $caracteristicas.", ";
	}
	echo "<br>";

	var_dump($exibir);
 ?>