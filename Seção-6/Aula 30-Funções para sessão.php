<?php 

	require_once('Aula 28-config.php');

	echo session_save_path(); // mostra o caminho 

	echo "<BR>";

	echo "(".session_status().") "; // estatos da função

	echo "<BR>";

	switch(session_status()){
		case 0:
			echo "Session Disabled";
		break;

		case 1:
			echo "Session None";
		break;

		case 2:
			echo "Session Active";
		break;

		default:
			echo "Error";
		break;
	}

 ?>