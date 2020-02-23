<?php 

	$images = scandir("images");
	$data = array();

	foreach ($images as $img) {
		if (!in_array($img, array(".",".."))){
			$fileName = "images".DIRECTORY_SEPARATOR.$img;
			$info = pathinfo($fileName);
			//var_dump($info);
			$info["size"] = filesize($fileName);
			$info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
			$info["url"] = "http://127.0.0.1/Curso-HCode---PHP/Se%C3%A7%C3%A3o-14/".str_replace('\\', "/", $fileName);
			array_push($data, $info);
		}
	}

	echo json_encode($data);

 ?>