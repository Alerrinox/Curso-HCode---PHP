<?php 

	require_once("config.php");

	$cad = new Cadastro();

	$cad->setNome("Jovem Jovem");
	$cad->setEmail("jovem@Jv.com.br");
	$cad->setSenha("12345678");

	echo $cad;

 ?>