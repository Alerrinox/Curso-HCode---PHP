<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
//Explicação CamelCase e case sensitive.

	$anoNascimento = "1980";
	$nomeCompleto = "Zezinho";
	$sobrenome = "de jesus";
	//Concatenação de variaveis
	echo $nomeCompleto." ".$sobrenome;
	// OU echo "$nomeCompleto $sobrenome";
	echo "<br/><br/>";

/////////////////////////////////////////////////////

/*Explicação de nomes de variaveis e suas restrições:
 	-Não pode inicializar variaveis com números.
	-Não pode usar caracteres para nome de variaveis com Exceção da under-line (_).
	-Tentar usar sempre Camel-Case pe nome com sentido.
*/
	// nome1 variavel criar e depois imprimida.
	$nome1 = "Antonio";
	echo "$nome1 <br/><br/>";
	// nome1 variavel limpa com a função unset.
	unset($nome1);
	// isset esta verificando se a variavel existe. 
	if (isset($nome1)) {
		echo "$nome1";
	}

/////////////////////////////////////////////////////

	// Tipo de dados
	$nome = "HCode";			// String
	$site = 'www.HCode.com.br'; // String

	$ano = 1990;				//inteiro
	$salario = 5500.99;			//float
	$bloqueado = false;			//boolean

	// Tipos especial
	$nulo = null;
	$vazio = "";


/////////////////////////////////////////////////////

	// Array de 3 posições
	$frutas = array("abacaxi","limão","kiwi");
	// acessando e imprimindo kiwi por indice
	echo "$frutas[2] <br/><br/>";

/////////////////////////////////////////////////////

	// Orientação à objetos
	// Objeto nativo DateTime:
	$data = new DateTime();
	var_dump($data);
	echo "<br/><br/>";

/////////////////////////////////////////////////////
	
	//Resource (Obs.: variável especial, que mantém uma referência a um recurso externo).
	//metodo para ler arquivo 
	$arquivo = fopen("Aula 14-Tipos de variaveis.php", "r");
	var_dump($arquivo);

?>
</body>
</html>