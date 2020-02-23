<?php 

	function trataNome($nome){
		if (!$nome) {
			throw new Exception("Error Processing Request", 1);
		}
		echo "$nome  || ";
	}
	try {
		trataNome("rafael");
		trataNome("");
	} catch (Exception $e) {
		echo $e->getMessage()."   ||   "."  ||  ";
	} finally{
		echo "excutou o try";
	}

 ?>