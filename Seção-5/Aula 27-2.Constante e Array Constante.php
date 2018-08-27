<?php 

// Constantes de array
// define(nome_da_constante, array_de_valor_da_constante);

define("LOGIN", [
	"127.0.0.1",
	"root",
	"password",
	"nome" 
]/*true*/);

// ^ Obs.: A constante é case-sensitive padrão, caso queria que não seja case-sensitive tem que colocar true no final (Onde esta comentado true);

print_r(LOGIN);

?>