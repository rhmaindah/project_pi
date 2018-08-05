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
		$query = "insert into " .$this->table_name." values(?,?,?,?)";
		//yang teliti ndah !!!
		//ini kolomnya kan ada 4 di database
		//terus kenapa ini ada 5????
		//besok besok jangan panik, cek dulu satu satu, kemungkinan salahnya dimana. hmmmmm
		//udah salahnya gitu doang ckck
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