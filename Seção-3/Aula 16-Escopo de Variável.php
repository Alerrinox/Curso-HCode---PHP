<?php
/*
Existe 3 tipos de escopo PHP: local, global, super global.
Variável do escopo global só pode ser usado em uma escopo local se tiver dentro dela a decaração "global", do contrário será entendido com outra variável diferente. Já as super global pode ser em qualquer escopo, seja ela local ou global. 
*/

$dinheiro = "real";

function Brasil() {
	global $dinheiro;
	echo "$dinheiro é moeda a brasileira <BR/><BR/>";
}
// Vai dar erro, variavel não declarada
function Espanha() {
	// pode colocar qual quer valor em dinheiro da Espanha que não vai sofrer alteração da variável $dinheiro = "real"; 
	$dinheiro;
	// $dinheiro = "EURO";
	echo "$dinheiro é moeda da Espanha";
}

Brasil();
Espanha();
?>