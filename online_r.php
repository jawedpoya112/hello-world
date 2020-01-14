<?php 
	if (isset($_POST['reg_user'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$f_name = $_POST['f_name'];
		$tazkira = $_POST['tazkira'];
		$email = $_POST['email'];
		$attach = $_FILES['attach']['name'];
		$photo = $_FILES['photo']['name'];
		$age = $_POST['age'];
		$gender = $_POST['gen'];
		if ($fname == "" or $lname == "" or $f_name == "" or $tazkira == "" or $email == "" or $attach == null or $photo == null or $age == "" or $gender == "") {
			header('location: online_r.php?err=empty');
		} else {
		if($gender <= 25 && $gender >= 18) {
			$sql = "INSERT INTO cti_reg_user(fname, lname, f_name, tazkira, email, acknowledgement, ";
			
		}
	}
		
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Css/Style/form_style.css'>
	</head>
	
	<body>
	<h1 align='center' id='reg_user_h1'>Welcome to Online Registration!</h1>
		<form method='POST' >
			<input type='text' name='fname' placeholder='First Name...............!'>
			<input type='text' name='lname' placeholder='Last Name...............!'>
			<input type='text' name='f_name' placeholder='Father Name...............!'>
			<input type='text' name='tazkira' placeholder='Tazkira Number...............!'>
			<input type='email' name='email' placeholder='Email Address...............!'>
			<span>Acknowledgement:</span> <input type='file' name='attach'>
			<span>Photo:</span> <input type='file' name='email'>
			<span>Age:</span><input type='number' name='age'>
			<span>Gender:</span>&nbsp;&nbsp;&nbsp; 
			<label> Male<input type='radio' name='gen' value='male'></label>
			&nbsp;&nbsp;&nbsp;<label> Female<input type='radio' name='gen' value='female' ></label>
			<input type='submit' name='reg_user' value='Register'> 
		</form>
	</body>

</html>