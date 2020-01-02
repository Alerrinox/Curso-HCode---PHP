<?php 

	require_once("config.php");

	use cliente\Cadastro;
	$cad = new Cadastro();

	$cad->setName("Jovem Jovem");
	$cad->setEmail("Jovem@gmail.com");
	$cad->setSenha("12345678");
	//echo $cad;
	$cad->registrarVenda();
 ?>