<?php

	//String
	$nome = "josé silva das Montanhas";
	echo "$nome";
	echo "<BR/>";

	// upperCase - coloca tudo em maiúculo (mesma coisa que toUpperCase no JavaScript).
	echo strtoupper($nome);
	echo "<BR/>";
	// lowerCase - coloca tudo em minúsculo (mesma coisa que toLowerCase no JavaScript).
	echo strtolower($nome);
	echo "<BR/>";
	// ucwords - coloca as primeira letra da palavras em maiúculo.
	echo ucwords($nome);
	echo "<BR/>";
	// ucfirst - coloca as primeira letra da frases em maiúculo.
	echo ucfirst($nome);
	echo "<BR/>";
?>