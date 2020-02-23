<?php 

	class Usuario{
		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;

		public function __construct($login = "", $senha = ""){
			$this->setDeslogin($login);
			$this->setDessenha($senha);
			if($login != "" or $senha != ""){
			$this->insert();
		}
		}


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
		
			$this->setData($result);

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
			
			$this->setData($result);

		}

		public function setData($result){
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

		public function insert(){
			$sql = new Sql();
			$result = $sql->select("CALL sp_usuarios_insert(:LOGIN,:PASSWORD)", array(
				':LOGIN'=>$this->getDeslogin(),
				':PASSWORD'=>$this->getDessenha()
			));

			$this->setData($result);
		}

		public function update($login, $password){

			$this->setDeslogin($login);
			$this->setDessenha($password);


			$sql = new Sql();
			$result = $sql->select("UPDATE tb_usuarios SET deslogin = :LOGIN , dessenha = :SENHA WHERE idusuarios = :ID", array(
				":ID" => $this->getIdUsuario(),
				":LOGIN" => $this->getDeslogin(),
				":SENHA" => $this->getDessenha()
			));

			//$this->setData($result);
		}

		public function delete(){
			$sql = new Sql();
			$sql->select("DELETE FROM tb_usuarios WHERE idusuarios = :ID", array(
				":ID" => $this->getIdUsuario()
			));

			$this->getIdUsuario(0);
			$this->getDeslogin("");
			$this->getDessenha("");
			$this->getDtCadastro();

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