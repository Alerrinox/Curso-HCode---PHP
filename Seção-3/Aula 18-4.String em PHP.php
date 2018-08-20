<?php 
	//strpos e substr
	$frase = "Cada minuto que passa é uma chance de mudar tudo pra sempre.";
	echo "$frase <br/>";
	/* 
		//apenas pra conferir a posição
		$frase2 = "Cada minuto que passa é uma ";
		echo strlen($frase2); // (29)
		//strlen igual à .length em javaScript 
	*/
	////////////////////////////////////////////////////////////////////////////

	//palavra_chave pra busca
	$palavra_chave = "chance";

	// strpos(onde_busca, palavra_Chave), esta função vai buscar em uma frase uma palavra e retornar sua posição.
	$Posicao = strpos($frase, $palavra_chave);
	//var_dump($Posicao); // retorna (29) do tipo inteiro
	echo "$Posicao <br/>";
	////////////////////////////////////////////////////////////////////////////

	//substr(ondeBusca, de_onde_começar, de_onde_parar), substr recorta pra da frase do começo(definido por você) até a posição do palavra(também definido por você).
	$recortar_pre = substr($frase, 0, $Posicao);
	echo "$recortar_pre <br/>";
	// Obs.: caso queria ver a palavra chave no Recorte_pre é só somar +strlen($palavra_chave) com o $Posicao.
	////////////////////////////////////////////////////////////////////////////

	//substr(ondeBusca, de_onde_começar + a_palavra_chave, de_onde_parar), substr recorta pra da frase do começo(nesse caso é a posição + length da palavra chave) até a ultima posição(length da frase de onde tu busca).
	$recortar_pos = substr($frase, $Posicao + strlen($palavra_chave), strlen($frase));
	echo "$recortar_pos <br/>";
	// Obs.: caso queria ver a palavra chave no Recorte_pos é só tirar +strlen($palavra_chave).
?>