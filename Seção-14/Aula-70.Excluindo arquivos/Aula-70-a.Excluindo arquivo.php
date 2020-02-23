<?php 

	$file = fopen("oi.txt", "w+");

	fclose($file);

	unlink("oi.txt");

	echo "Arquivo removido com sucesso";
	
 ?>