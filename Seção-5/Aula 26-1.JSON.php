<?php  

// de array para JSON  

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
// JSON_encode passa um array para json
echo json_encode($pessoas);

?>