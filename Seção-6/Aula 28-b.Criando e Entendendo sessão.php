<?php 

// os arquivos Aula 28 a, b e config tem que esta juntos na mesma pasta pra funcionar  

//require chamando session_start();
require_once("Aula 28-config.php");
////limpa a variavel de sessão 
//session_unset();
////limpa a variável e remove o usuário
//session_destroy();

echo $_SESSION['nome'];

?>