<?php 

	// Include é um importação de um arquivo (normalmente PHP) externo para sua página.
	//  include "Aula 19-1.b.Incluindo arquivo com include e require.php";
////////////////////////////////////////////////////////////////////////////////

	// (recomendado)
	// Require é também a importa de arquivo externo para sua página atual.
		require "Aula 19-1.a.Incluindo arquivo com include e require.php";
////////////////////////////////////////////////////////////////////////////////

	$resultado = somar(56,64);
	echo $resultado;
////////////////////////////////////////////////////////////////////////////////
/*
	Diferença entre include e require
	include :
		-mesmo com erro vai tentar funcional
		-tem mais recurso 
		-diretorio caso ainda não exista no conteúdo principal (include path);
		-(Perigoso) você pode trazer recurso(arquivo) de outro site (include remoto); 

	require :
		-é obrigatório que o arquivo exista
		-o código tem que esta funcionando corretamente. 	

*/

// require_once e include_once (a função só pode ser chamado uma vez, basicamente ele).

?>