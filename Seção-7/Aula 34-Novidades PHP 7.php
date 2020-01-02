<?php 
	//declaração de tipos escalares (como se parametro dinamico)
	function funcao(float ...$variaveis): int{
		//soma itens de um array arrays
		return array_sum($variaveis);

	}

	echo funcao( 2, 4)."<BR>";
	echo funcao( 2.2, 2.2, 2, 5)."<BR>";
	echo funcao( 1)."<BR>";

 ?>