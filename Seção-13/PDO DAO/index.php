<?php 

	require_once("config.php");

	//Carregando um usuario pelo ID
	//$usu = new Usuario();
	//$usu->loadById(6);
	//echo($usu);

	//Carrega a lista total de usuarios
	//$r = Usuario::getList();
    //print_r( json_encode($r));

	//carrega uma lista de usuarios buscando pelo login
    //$r = Usuario::seach("MA");
    //print_r(json_encode($r));

	//carrega um usuario usando o login e a senha 
	//$usu = new Usuario();
	//$usu->login("Mane","163637");
	//echo $usu;

	//$aluno = new Usuario("treta","huehuehues");
	//echo $aluno;

	$alteracao = new Usuario();
	$alteracao->loadById(19);
	$alteracao->update("157deXXT","ppk21");
	echo $alteracao;

 ?> 