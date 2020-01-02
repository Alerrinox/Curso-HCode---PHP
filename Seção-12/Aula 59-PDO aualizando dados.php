<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuarios = :ID");

	$login = "Mane";
	$password = "163637";
	$idusuario = 8;

	$stmt->bindParam(":LOGIN",$login);
	$stmt->bindParam(":PASSWORD",$password);
	$stmt->bindParam(":ID", $idusuario);

	$stmt->execute();

	echo "Alterado ok!";

 ?>