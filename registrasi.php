<?php
include "includes/koneksi.php";

$koneksi = new Koneksi();
$db = $koneksi->getConnection();

if($_POST){
	include_once 'includes/user.inc.php';
	$eks = new User($db);

	$eks->em = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
	$eks->nl = filter_input(INPUT_POST,'fullname',FILTER_SANITIZE_STRING);
	$eks->un = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
	$eks->ps = md5($_POST['password']);
	$eks->ad = filter_input(INPUT_POST,'address', FILTER_SANITIZE_STRING);
	$eks->tp = filter_input(INPUT_POST, 'telp', FILTER_SANITIZE_STRING);

	if ($eks->insert()){
	echo "<script>alert('Data berhasil ditambahkan')</script>";
	echo "<meta http-equiv='refresh' content='0; url=login.php'>";

		}

		else{

			echo "<script>alert('Data gagal ditambahkan')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css" media="screen">
		body{
			margin: 0 auto;
			background-image: url("assets/img/back.jpg");
			background-repeat: no-repeat;
			background-size: 100%;
		}

		.container{
			width: 500px;
			height: 630px;
			text-align: center;
			margin: 0 auto;
			background-color: rgba(44, 62, 80,0.7);
			margin-top: 100px;
		}

		.container img{
			width: 150px;
			height: 150px;
			margin-top: -60px;
		}

		input[type="text"],input[type="password"]{
			margin-top: 25px;
			height: 40px;
			width: 300px;
			font-size: 18px;
			margin-bottom: 8px;
			background-color: #fff;
			padding-left: 20px;
		}

		.btn-regist{
			padding: 15px 25px;
			border: none;
			background-color: #27ae60;
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="assets/img/mome(1).jpg"/>
		<form method="POST">
			<div class="form-input">
				<input type="text" name="email" placeholder="Enter the Email"/> 
			</div>
			<div class="form-input">
				<input type="text" name="fullname" placeholder="Enter the Full Name"/> 
			</div>	
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the Username"/> 
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password"/>
			</div>
			<div class="form-input">
				<input type="text" name="address" placeholder="Address"/>
			</div>
			<div class="form-input">
				<input type="text" name="telp" placeholder="Nomor Tlp"/>
			</div>
			<input type="submit" type="submit" value="Register" class="btn-regist"/>
		</form>
		<div class="footer-login">
      			<p>Already Have an Account? <a href="login.php">Login</a></p>
    	</div>
	</div>
</body>