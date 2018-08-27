<?php  

// Array multidimensional

$pessoas = array();

// Array_push adicional um novo elemento em um array
array_push($pessoas, array(
	'nome' => 'rafael',
	'idade' => 28 
));
array_push($pessoas, array(
	'nome' => 'daimon',
	'idade' => 40
));
// print_r serve para mostrar itens de um array
print_r (ucwords($pessoas[0]['nome']));

?>