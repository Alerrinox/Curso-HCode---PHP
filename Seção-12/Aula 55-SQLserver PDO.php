<?php 

	$conn = new PDO("sqlsrv:Server=dsk-pch-hd_0001\sqlexpress;Database=dbphp7;connectionPooling=0","",""); 
	
	$strt = $conn->prepare("SELECT * FROM cliente ORDER BY LastName;");
	$strt->execute();
	$results = $strt->fetchALL(PDO::FETCH_ASSOC);
	echo json_encode($results);

 ?>