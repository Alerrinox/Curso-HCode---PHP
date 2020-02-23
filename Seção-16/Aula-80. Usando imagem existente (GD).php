<?php 

	$image = imagecreatefromjpeg("certificado.jpg");

	$tcolor = imagecolorallocate($image, 0, 0, 0);
	$grey = imagecolorallocate($image, 100, 100, 100);

	imagestring($image, 5, 450, 150, "CERTIFICADO", $tcolor);
	imagestring($image, 5, 440, 350, "Rafael Barros de Oliveira", $tcolor);
	imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ".date("d/m/Y")), $tcolor);

	header("Content-type: image/jpg");

	imagejpeg($image, "certificado ".date("d-m-Y").".jpg");

	imagedestroy($image);

 ?>