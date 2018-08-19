<?php 

	// Comparador null coalesce (??)
	$a = null;
	$b = null;
	$c = 5;

	// Null coalesce é um comparador que se a primeira expressão for nula, Null coalesce a segunda, e se a segunda for nula, ele verar a próxima até encontra um valor não nulo. 
	//// Obs.: se não houver valor não-nulo, não irá retornar nada. 

	echo $a ?? $b ?? $c;

?>