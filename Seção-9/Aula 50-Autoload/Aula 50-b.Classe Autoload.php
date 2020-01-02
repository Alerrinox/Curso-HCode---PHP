<?php 

spl_autoload_register(function ($nomeClasse){
	if (file_exists("Teste".DIRECTORY_SEPARATOR."$nomeClasse.php") === true){
		require_once("Teste".DIRECTORY_SEPARATOR."$nomeClasse.php");
	}
});

//require_once("DelRey.php");

$carros = new DelRey();
$carros->acelerar(70);

 ?>