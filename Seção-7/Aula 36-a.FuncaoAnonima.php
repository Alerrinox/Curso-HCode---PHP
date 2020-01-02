<?php 

	function teste($callback){
		$callback();
	}

	teste(function(){
		echo "Devolvendo a função";
	});

 ?>