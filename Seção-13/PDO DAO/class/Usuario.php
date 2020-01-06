<?php 

	class Usuario{
		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;


		public function getIdUsuario(){
			return $this->idusuario;
		}

		public function getDeslogin(){
			return $this->deslogin;
		}

		public function getDessenha(){
			return $this->dessenha;
		}

		public function getDtCadastro(){
			return $this->dtcadastro;
		}

		public function setIdUsuario($idusuario){
			$this->idusuario = $idusuario;
		}

		public function setDeslogin($deslogin){
			$this->deslogin = $deslogin;
		}

		public function setDessenha($dessenha){
			$this->dessenha = $dessenha;
		}

		public function setDtCadastro($dtcadastro){
			$this->dtcadastro = $dtcadastro;
		}

		public function loadById($id){
			$sql = new SqL();
			$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuarios = :ID", array(":ID"=>$id));

			if (count($result) > 0) {

				$row = $result[0];

				$this->setIdUsuario($row['idusuarios']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtCadastro($row['dtcadastro']);
			} else {
				throw new Exception("Error Processing Request");
				
			}
		}

		public static function getList(){
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
		}

		public static function seach($login){
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
				':SEARCH'=>"%".$login."%"
			));
		}

		public function login($login, $password){
			$sql = new Sql();
			$result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
				":LOGIN"=>$login,
				":PASSWORD"=>$password
				));
			if (count($result) > 0) {

				$row = $result[0];

				$this->setIdUsuario($row['idusuarios']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtCadastro($row['dtcadastro']);

			} else {
				throw new Exception("senha ou login errado.");
				
			}
		}

		public function __toString(){

			return json_encode(array(
				'idusuarios'=>$this->getIdUsuario(),
				'deslogin'=>$this->getDeslogin(),
				'dessenha'=>$this->getDessenha(),
				'dtcadastro'=>$this->getDtCadastro()
			));
		}
	}
	

 ?>