<?php
include_once 'includes/koneksi.php';

$koneksi = new koneksi();
$db = $koneksi->getConnection();
	
if($_POST){
	
	include_once 'includes/login.inc.php';
	$login = new Login($db);

	$login->userid = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
	$login->passid = md5($_POST['password']);

	if($login->login()){
		
		if($_SESSION['username']!='rhma13IS'){

		echo "<script>location.href='index.php'</script>";	
}
		else{
		echo "<script>location.href='index2.php'</script>";
	}
	}else{
		echo "<script>alert('Username atau Password salah')</script>";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css" media="screen">
		body{
			margin: 0 auto;
			background-image: url("assets/img/back.jpg");
			background-repeat: no-repeat;
			background-size: 100% 720px;
		}

		.container{
			width: 500px;
			height: 450px;
			text-align: center;
			margin: 0 auto;
			background-color: rgba(44, 62, 80,0.7);
			margin-top: 160px;
		}

		.container img{
			width: 150px;
			height: 150px;
			margin-top: -60px;
		}

		input[type="text"],input[type="password"]{
			margin-top: 30px;
			height: 45px;
			width: 300px;
			font-size: 18px;
			margin-bottom: 20px;
			background-color: #fff;
			padding-left: 40px;
		}

		.form-input::before{
			content: "\f007";
			font-family: "FontAwesome";
			padding-left: 07px;
			padding-top: 28px;
			position: absolute;
			font-size: 35px;
			color: #2980b9; 
		}

		.form-input:nth-child(2)::before{
			content: "\f023";
		}

		.btn-login{
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
				<input type="text" name="username" placeholder="Enter the User Name"/> 
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password"/>
			</div>
			<input type="submit" type="submit" value="Sign In" class="btn-login"/>
		</form>
		<br>
		<div class="footer-login">
      			<p>New Customer? <a href="registrasi.php">Create Account</a></p>
    	</div>
	</div>
</body>