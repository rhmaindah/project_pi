<?php
class Contact{
	private $conn;
	private $table_name = "contact";

	public $nl;
	public $em;
	public $su;
	public $ms;

	public function __construct($db){
		$this->conn = $db;
	}

	function insert(){
		$query = "insert into " .$this->table_name." values('',?,?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->nl);
		$stmt->bindParam(2, $this->em);
		$stmt->bindParam(3, $this->su);
		$stmt->bindParam(4, $this->ms);

		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>