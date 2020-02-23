<?php 
	

	$image = imagecreatefromjpeg("certificado.jpg");

	$tcolor = imagecolorallocate($image, 0, 0, 0);
	$grey = imagecolorallocate($image, 100, 100, 100);

	$bevan = __DIR__. DIRECTORY_SEPARATOR ."fonts". DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan.ttf";
	
	$playball = dirname(__FILE__). DIRECTORY_SEPARATOR ."fonts". DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball.ttf";
	

	imagettftext($image, 32, 0, 450, 150, $tcolor, $bevan, "CERTIFICADO");
	imagettftext($image, 32, 0, 440, 350, $tcolor, $playball, "Rafael Barros de Oliveira");
	imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ".date("d/m/Y")), $tcolor);

	//header("Content-type: image/jpeg");

	imagejpeg($image);

	imagedestroy($image);

 ?>