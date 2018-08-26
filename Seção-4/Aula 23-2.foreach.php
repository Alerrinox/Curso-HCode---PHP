<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>


<form>

	<input type="text" name="Nome">
	<input type="date" name="Nascimento">
	<input type="submit" value="Enviar">	

</form>


<?php
	
	if (isset($_GET)) {

	foreach ($_GET as $item => $value) {
		echo $item." : ".$value."<br/>";
	}

	}
?>
</body>
</html>




