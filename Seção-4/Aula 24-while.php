<?php 

$condicao = true;

while ($condicao) {
	$numero = rand(1, 10);
	if ($numero == 7) {
		echo " Sete !";
		// $condicao = false;
		break;
	}
	echo " ".$numero;
}

 ?>