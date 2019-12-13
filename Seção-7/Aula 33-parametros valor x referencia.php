<?php 
	
	$a = 10;
	echo "variavel fora da função antes: ".$a."<br>";
	function text(&$b){    // se tirar o ponteiro o valor final de $a voltará a ser 10;
		$b = 6;
		$b += 3;
		echo "dentro da função: ".$b."<br>";
		return $b;
	}
	echo "valor de retorna da função: ".text($a)."<br>";
	echo "variavel fora da função agora: ".$a."<br>";

 ?>