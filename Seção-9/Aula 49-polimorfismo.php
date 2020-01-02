<?php 

abstract class Animal{

	public function falar(){
		return 'Som';
	}
	public function mover(){
		return 'Anda';
	}
}
	class Cachorro extends Animal{
		public function falar(){
			return "Late";
		}
	}
	class Gato extends Animal{
		public function falar(){
			return "Miau";
		}
	}
	class Passaro extends Animal{
		public function falar(){
			return "Canta";
		}
		public function mover(){
			return "Voa e ".parent::mover();
		}
	}
	$pluto = new Cachorro();
	echo $pluto->falar()."<br>";
	echo $pluto->mover()."<br>";

	echo "------------------------------------------"."<br>";

	$felix = new Gato(); 
	echo $felix->falar()."<br>";
	echo $felix->mover()."<br>";

	echo "------------------------------------------"."<br>";

	$zecaUrubu = new Passaro();
	echo $zecaUrubu->falar()."<br>";
	echo $zecaUrubu->mover()."<br>";
 ?>