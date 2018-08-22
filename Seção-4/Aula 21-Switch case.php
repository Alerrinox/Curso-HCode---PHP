<?php  

$diaDaSemana = date("w");
	//echo "$diaDaSemana <br/>";
	//Situação 
switch ($diaDaSemana) {
	//casos
	case '0':
		echo "domingo";
		break;
	case '1':
		echo "Segunda-feira";
		break;
	case '2':
		echo "Terça-feira";
		break;
	case '3':
		echo "Quanta-feira";
		break;
	case '4':
		echo "Quinta-feira";
		break;
	case '5':
		echo "Sexta-feira";
		break;
	case '6':
		echo "sábado";
		break;
	//Padrão
	default:
		echo "ERRO, provalmente chegou o fim do mundo!";
		break;
}


?>