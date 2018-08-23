<?php  

	// for - estrutura de repetição 
	for ($i = 0; $i <1000; $i+=5) {

		if($i > 200 && $i < 800) continue; // continue salta o resto do programa e continua a execução.
		//if($i > 200 && $i < 800) break; // break sai do laço de repetição
		echo $i."<br/>";

		//Obs.: tomar cuidado como pra não cria um loop infinito no php, pode derrubar um servidor. 
	}

?>