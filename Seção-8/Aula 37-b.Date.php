<?php 
	//convertendo date(especifico) pra time stamp
	$timeStamp = strtotime("2006/06/06");
	//convertendo time stamp(especifico) pra date , o l = dia da semana 
	echo date("l, d/m/y", $timeStamp)." : ".$timeStamp;

 ?>