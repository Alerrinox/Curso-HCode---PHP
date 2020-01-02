<?php 

	interface Veiculo{
		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo{
		public function acelerar($velocidade){
			echo "O veiculo acelereu até ". $velocidade." km/h.";
		}
		public function freiar($velocidade){
			echo "O veiculo acelereu até ". $velocidade." km/h.";
		}
		public function trocarMarcha($marcha){
			echo "O veiculo acelereu até ". $velocidade." km/h.";
		}
	}

	$carro = new Civic();


 ?>