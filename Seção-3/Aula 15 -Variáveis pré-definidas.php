<?php

/*
	Variáveis pré-definidas, também conhecidas com super-globais, estas variáveis pré-definidas pode ser acessadas de qualquer parte do PHP, independente do escopo que você quer acessar.
*/
/*
	 $_GET e $_POST são super-globais pra recebimento de dados externo (pela URL). Na parte da esquerda da URL tem o endereço da página e é separada por uma interrogação(?). apartir da adicionar valor a "a" através do sitanal de igual(=) ,também conhecida como atribuição. ...?a=henriqueta ,conhecido como "query String". Se quiser passar mais de um valor você pode separar por &,  ...?a=henriqueta&b=leandro .
*/
/*
	 URL = Uniform Resource Locator(Localizador Uniforme de Recursos)
	 protocolo(esquema)://domínio:porta/path(caminho)/recurso?query_string(valores)#hash(fragmento)
*/
	//ObS.: Toda informação que vem da URL com String. Podendo se comovertida posteriormente. No caso, se quiser um número poder forçar a conversão com um typecast na frente do $_GET["a"]. Ficando assim, (int)$_GET["a"]; .
	 
	//Usei ternário aqui, valor_boolean ? true : false ; 
	$Nome = isset($_GET["a"]) ? $_GET["a"] : "NÃO INFORMOU A VALOR DA VARIAVEL";
	//var_dump($Nome);
	echo "$Nome <BR/><BR/>";

	// Mostra o endereço de ip desse maquina, no caso de um localhost, mostra ::1.
	$Ip = $_SERVER["REMOTE_ADDR"];
	echo "$Ip <BR/><BR/>";
	// Pega informação da URL e diretório e pastas.
	$caminho = $_SERVER["SCRIPT_NAME"];
	echo $caminho;

?>