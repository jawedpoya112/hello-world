<?php 
include_once 'includes/connection.php';
	$msg = "";
	$hash_pwd = "";
	if (isset($_POST['login_e'])) {
			$username = $_POST['username'];
			$password = base64_encode($_POST['password']);
			$decode_password = base64_decode($password);
		if (!($username == "" and $password == "")) {
			$sql = "SELECT * FROM site_users WHERE uname='$username' AND upassword='$password'";
			$result = mysqli_query($con, $sql);
			$no_row = mysqli_num_rows($result);
			if ($no_row == 1) {
				$_SESSION['uname'] = $username;
				header('location: online_e.php?login=success');
			}
			else {
				$msg = "<p class='Unsuccess'><span class='bold'>Error! </span>Incorrect Username or Password!</p>";
			}
		}
		else {
			$msg = "<p class='Unsuccess'><span class='bold'>Error Empty! </span>Please Fill The Box and after Login!</p>";
		}
	}

?>
<!DOCTYPE html>

<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Css/Style/form_style.css'>
		<link rel='stylesheet' type='text/css' href='Css/Style/msg_style.css'>
	<style>
		</style>
	</head>
	<body>
	<h1 id='login_h1'>Login Page For Exam!</h1>
		<?php if (isset($_POST['login_e'])) {echo $msg;} ?>
		<form  method='post'> 
		<img src='Images/Icons/login_logo.png'>
			<input type='text' name='username' placeholder='Username..........!'>
			<input type='password' name='password' placeholder='Password..........!'>
			
			<p>If you don't have CTI Website Account Plese <a href='create_new.php'>Click Here</a> and Create An Account For Your Self and after login to exam part.</p>
			
			<input type='submit' name='login_e' value='Login'>
		</form>
	</body>

</html>