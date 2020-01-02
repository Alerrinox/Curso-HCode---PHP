<?php 
namespace Cliente;
class Cadastro extends \Cadastro {
	public function registrarVenda(){
		echo "Foi registrando uma venda no nome do cliente ".$this->getName();
	}
}

 ?>