<?php 

	$filename = "html5.png";

	$base64 = base64_encode(file_get_contents($filename));

	$fileinfo = new finfo(FILEINFO_MIME_TYPE);

	$MIMETYPE = $fileinfo->file($filename);

	$base64encode = "data:".$MIMETYPE.";base64,".$base64;

 ?>

 <a href="<?=$base64encode?>">LINK DE IMAGEM</a>
 <img src="<?=$base64encode?>">