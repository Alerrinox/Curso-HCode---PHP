<?php 

	$dt = new DateTime();
	//Plus de 15 DIAS
	$periodo = new DateInterval("P15D");

	echo $dt->format("d/m/y H:i:s")."<BR>";

	$dt->add($periodo);

	echo $dt->format("d/m/y H:i:s");

 ?>