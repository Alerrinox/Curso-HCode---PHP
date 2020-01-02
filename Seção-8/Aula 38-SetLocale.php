<?php 
	// linux = "pt_BR", padrão com utf-8 = "pt_BR.utf-8", window ="portuguese"
	setlocale(LC_ALL, 'pt_BR.UTF-8', 'Portuguese.utf-8');
	//time-zone
	date_default_timezone_set("America/Sao_Paulo");
	// %T = %H:%M:%S
	echo ucwords(strftime("%A, %d de %B de %Y (%d/%m/%y) são %T "));
	// Terça-feira, 17 De Dezembro De 2019, 17/12/19
 ?>