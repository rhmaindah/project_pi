<?php
class User{
	private $conn;
	private $table_name = "users";

	public $id;
	public $nl;
	public $un;
	public $em;
	public $ps;
	public $ad;
	public $tp;

	public function __construct($db){
		$this->conn = $db;
	}

	function insert(){
		$query = "insert into " .$this->table_name." values('',?,?,?,?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->nl);
		$stmt->bindParam(2, $this->un);
		$stmt->bindParam(3, $this->em);
		$stmt->bindParam(4, $this->ps);
		$stmt->bindParam(5, $this->ad);
		$stmt->bindParam(6, $this->tp);

		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>