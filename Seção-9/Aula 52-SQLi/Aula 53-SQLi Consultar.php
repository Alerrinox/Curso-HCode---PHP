<?php 

	$conn = new mysqli("localhost","root","","dbphp7");

	if ($conn->connect_error){
		echo "Error : ".$conn->connect_error;
	}

	$result = $conn->query("select * from tb_usuarios order by deslogin");

	$dataArray = array();
	while($row = $result->fetch_assoc()){
		array_push($dataArray, $row);
	}

	$ddd = json_encode($dataArray);
	var_dump($ddd);
 ?>