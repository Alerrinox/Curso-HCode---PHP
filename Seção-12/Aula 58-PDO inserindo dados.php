<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values (:LOGIN, :PASSWORD)");

	$login = "Jose";
	$password = "123987";

	$stmt->bindParam(":LOGIN",$login);
	$stmt->bindParam(":PASSWORD",$password);

	$stmt->execute();

	echo "Inserido ok!"

 ?>