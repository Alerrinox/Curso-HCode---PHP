<?php 

	$conn = new mysqli("localhost","root","","dbphp7");

	if ($conn->connect_error){
		echo "Error";
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");
	$stmt->bind_param("ss",$login,$senha);
	///////////////////////////
	$login = "SouOtaario";
	$senha = "123678";
	$stmt->execute();
	///////////////////////////
	$login = "99predator";
	$senha = "6787123";
	$stmt->execute();


 ?>