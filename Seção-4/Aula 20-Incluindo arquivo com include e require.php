<?php  

	// Estruturas de controle de fluxo ou estruturas de decisão
	
	$sua_Nota = 39;

	$Nota_Baixa = 40;
	$Nota_Media = 60;
	$Nota_Alta = 85;

	if ($sua_Nota < $Nota_Baixa) {
		echo "Sua nota é horrível!";
	} else if ($sua_Nota <= $Nota_Media) {
		echo "Sua nota esta baixa, tente melhor!";
	} else if ($sua_Nota <= $Nota_Alta) {
		echo "Sua nota esta razoável!";
	} else {
		echo "Exelente, continue sempre assim!";
	}

	// também existe uma estrutura de decisão chamada ternário, (condição) ? "se_verdadeiro" : "se_falso"; 
?>