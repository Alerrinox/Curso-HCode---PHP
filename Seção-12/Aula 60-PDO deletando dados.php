<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = :ID");

	$idusuario = 11;

	$stmt->bindParam(":ID", $idusuario);

	$stmt->execute();

	echo "delete ok!";

 ?>