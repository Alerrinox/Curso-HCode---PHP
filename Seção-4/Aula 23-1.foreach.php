<?php 

	$meses = array( 
		"janeiro", "fevereiro", "março",
		"abril", "maio", "junho",
		"julho", "agosto", "setembro",
		"outubro", "novembro", "dezembro"
	);
	foreach ($meses as $mes){
		echo "Mês : ". ucwords($mes)."<br/>";
	}

 ?>