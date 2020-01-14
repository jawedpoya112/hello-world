<?php 
include_once 'includes/connection.php';
if ($con) {
	if(isset($_POST['create_new'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$uname = $_POST['username'];
		$password = $_POST['password'];
		if ($fname == "" || $lname == "" || $email == "" || $uname == "" || $password == "") {
			$msg = "<p class='error'> <span class='bold'>Error Empty! </span> All Field Required Please fill All The box!</p>";} 
		else {
		$repeat_password = $_POST['rpassword'];
		if ($password === $repeat_password) {
			$hash_password = base64_encode($password);
			$sql = "INSERT INTO site_users(fname, lname, email, uname, upassword) VALUES('$fname', '$lname', '$email', '$uname', '$hash_password')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				$msg = "<p class='success'> <span class='bold'>Success! </span> Your Account Has been Successfully Created!</p>";
			}
			else {
				$msg = "<p class='Unsuccess'> <span class='bold'>Error! </span> Your Account is Not Created Please Try Again!</p>";
			}
		}
		else {
			$msg = "<p class='Unsuccess'> <span class='bold'>Error! </span> Passwords Don't match Please type Correct Password!</p>";
		}
	}
	}
	
}
	else {
		die('Error Accored Please Visit Site After!');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Css/Style/msg_style.css'>
		<style>
			body {
				margin: 0;
				padding: 0;
			}
			form input {
				width: 100%;
				height: 40px;
				display: block;
				margin: 0 auto;
				margin-top: 2px;
				border: 1px solid #e1e1e1;
				border-radius: 5px;
				padding-left: 10px;
			}
			input[type=submit] {
				width: 150px;
				margin-top: 5px;
				cursor: pointer;
				color: white;
				font-weight: bolder;
				background-image: url(Images/Icons/menu_bg.png);
			}
			form {
				width: 30%;
				margin: 0 auto;
				margin-top: -4%;
			}
			form p {
				text-align: justify;
				font-family: calibri;
				border: 1px solid #e1e1e1;
				width: 100%;
				margin: 0;
				margin-top: 4px;
				border-radius: 10px;
				background: #f9f9f9;
				padding: 4px 6px;
			}
			form p a {
				font-weight: bolder;
				text-decoration: none;
				color: #111;
			}
			form p a:hover {
				text-decoration: underline;
			}
			#login_h1 {
				color: #efefef;
				padding-top: 10px;
				height: 50px;
				text-shadow: 0 0 1px #111;
				text-align: center;
				margin: 0;
				background-image: url(Images/Icons/menu_bg.png);
				margin-bottom: 10%;
			}
		</style>
		<link rel='stylesheet' type='text/css' href='Css/Style/form_style.css'>
	</head>
	<body>
	<h1 id='login_h1'>Create An Account for your Self!</h1>
	<?php if (isset($_POST['create_new'])) {echo $msg;} ?>
		<form method='post'> 
			<input type='text' name='fname' placeholder='First Name..........!'>
			<input type='text' name='lname' placeholder='Last Name..........!'>
			<input type='email' name='email' placeholder='Email Address..........!'>
			<input type='text' name='username' placeholder='Username..........!'>
			<input type='password' name='password' placeholder='Password..........!'>
			<input type='password' name='rpassword' placeholder='Confirm Password..........!'>
			<input type='submit' name='create_new' value='Create'>
		</form>
	</body>

</html>