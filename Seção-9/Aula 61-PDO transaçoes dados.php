<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = ?");

	$idusuario = 4;

	$stmt->execute(array($idusuario));

	//$conn->rollback();
	$conn->commit();

	echo "delete ok!";

 ?>