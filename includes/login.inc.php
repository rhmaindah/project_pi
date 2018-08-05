<?php 
class Login
{
	private $conn;
	private $table_name = "users";
	
    public $user;
    public $userid;
    public $passid;

    public function __construct($db){
		$this->conn = $db;
	}

    public function login()
    {
        $user = $this->checkCredentials();
        echo $user;
        if ($user) {
            $this->user = $user;
			session_start();
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['address'] = $user['address'];
            $_SESSION['no_tlp'] = $user['no_tlp'];
            //return $user['full_name'];
            return true;
        }
        return false;
    }

 

    protected function checkCredentials()
    {
        $stmt = $this->conn->prepare('SELECT * FROM '.$this->table_name.' WHERE username=? and password=? ');
		$stmt->bindParam(1, $this->userid);
		$stmt->bindParam(2, $this->passid);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            $submitted_pass = $this->userid;
            if ($submitted_pass == $data['username']) {
                return $data;
            }
        }
        return false;
    }

    public function getUser()
    {
        return $this->user;
    }
}
?>
