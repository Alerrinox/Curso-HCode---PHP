<?php 

//TESTE de paramentros em uma função
function ola($primeiroParamentro ,$segundoParamentro ,$terceiroParamentro = 'Morning'){
	return $primeiroParamentro.' '.$segundoParamentro.', '.$terceiroParamentro.'<BR>';
}
//printando resultado
echo ' '.ola('Ola','Mundo','Manhã');
echo ' '.ola('Hello','World');
echo ' '.ola('Bonjour','Monde','Le Matin');

 ?>