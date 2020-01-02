<?php 

function __autoload($nomeClasse){
	require_once("Teste/$nomeClasse.php");
	
}

//require_once("DelRey.php");

$carros = new DelRey();
$carros->acelerar(70);

 ?>