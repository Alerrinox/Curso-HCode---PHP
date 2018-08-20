<?php 
	
	//String replace - str_replace(busca,subtituto, qual lugar busca), o replace basicamente subtitui um palavra ou um frase por outra.
	$empresa = "tangamandapio.Ltda";
	$empresa = str_replace("a", "@", $empresa);
	echo "$empresa";
?>