<?php 

$pessoa = array(
	'nome' => 'João',
	'idade' => 20
);
//Em value há uma passagem por referencia pra refereciar a idade e ter vizibilidade dentro do foreach
foreach($pessoa as &$value){
	if (gettype($value) === 'integer') {
		$value += 20;
		echo $value;
	}
}
echo "<br>";
//Se for retirado o a referenciação do foreach, volta a tem escopo diferente
var_dump($pessoa);
echo "<br>";
echo $pessoa['idade'];

 ?>
