<?php 
	//Esse exercicio necessita do arquivo config.php e Aula 28-a da aula 28.
	
	//SESSION_ID('m73tk8d2v162cc09l6dem0oleh');//Exmplo de recuperação de sessão.

    require_once("Aula 28-config.php");

    session_regenerate_id(); //Função pra renovar a ID.
	
	echo session_id(); //O ID é unico entre o cliente e aquele servidor.
	echo "<br>";
	var_dump($_SESSION);

 ?>