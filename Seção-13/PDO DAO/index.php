<?php 

	require_once("config.php");

	//////Carregando um usuario pelo ID////////
	//$usuario = new Usuario();
	//$usuario->loadById(6);
	//echo($usuario);

	//////Carrega a lista total de usuarios////////
	//$lista = Usuario::getList();
    //print_r( json_encode($lista));

	//////carrega uma lista de usuarios buscando pelo palavra chave////////
    //$busca = Usuario::seach("MA");
    //print_r(json_encode($busca));

	//////carrega um usuario usando o login e a senha ////////
	//$criar = new Usuario();
	//$criar->login("Mane","163637");
	//echo $criar;

	//////carrega um usuario usando __construct ////////
	//$aluno = new Usuario("treta","huehuehues");
	//echo $aluno;

	//////alterando usuario pelo ID ////////
	//$alteracao = new Usuario();
	//$alteracao->loadById(19);
	//$alteracao->update("157deXXT","ppk21");
	//echo $alteracao;

	//deleta um registro
	$alteracao = new Usuario();
	$alteracao->loadById(17);
	$alteracao->delete();


 ?> 