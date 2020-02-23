<?php 

class Sql extends PDO{

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");

	}

	private function setParams($statments, $parameters = array()){
		//$statments

		foreach ($parameters as $key => $value) {

			//$statment->bindParam($key,$value);
			$this->setParam($statments, $key, $value);
		

		}

	}

	private function setParam($statments, $key, $value){
		
		$statments->bindParam($key,$value);

	}

	public function query($rawQuery,$params){

		$stmt = $this->conn->prepare($rawQuery);
		
		$this->setParams($stmt, $params);

		$stmt->EXECUTE();

		return $stmt;

	}

	public function select($rawQuery, $params = array()):array{

		$stmt = $this->query($rawQuery,$params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}

 ?>