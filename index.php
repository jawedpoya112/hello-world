<?php 
	include_once 'Includes/banner.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Css/Style/style.css'>
		<script>
			function valid() {
				var search = document.getElementById('search');
				if (search.value == "") {
					alert('Fill the Box!');
					return false;
				}
				else {
					return true;
				}
			}
		</script>
	</head>
	<body>
		<div class='full-content'>
			<div class='content'>
				<div class='search_media'>
					<form method='post' action='includes/search.php'>
						<input type='submit' onclick='return valid();' name='s' value=''>
						<input type='text' id='search' name='search' placeholder='Search........!'>
					</form>
					
					<div class='search_media_con'>
						<a href="http://www.facebook.com"><img src='Images/Icons/facebook.png'></a>
						<a href="http://www.twiiter.com"><img src='Images/Icons/twitter.png'></a>
						<a href="http://www.googleplus.com"><img src='Images/Icons/google.png'></a>
					</div>
					<div class='clear-fix'></div>
					<?php if (isset($_GET['search'])) { 
						$search = $_GET['search'];
						if ($search == "ok") {
					?>
						<div class='search_result'><span id='ok'><span class='bold'>Search Successful: </span>The Result of Search is!</span></div>
					<?php } 
						else if ($search == "nok"){ ?> 
						<div class='search_result'><span id='nok'><span class='bold'>Search Unsuccessful: </span>There is no result for search!</span></div>
					<?php }}?>
				</div>
				<div class='teachers-con'>
				<h1 align='center' id='teacher-h1'>Current Teachers</h1>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/khan.png'>
							<h3 align='center'>Ahmad Ahmadi</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/la.png'>
							<h3 align='center'>Wali Mohammad</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/jan.jpeg'>
							<h3 align='center'>Khan Wali</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/wali.png'>
							<h3 align='center'>Jan Wali</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/moh.jpeg'>
							<h3 align='center'>Teachers name!</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/khan.png'>
							<h3 align='center'>Teachers name!</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/khan.png'>
							<h3 align='center'>Teachers name!</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/khan.png'>
							<h3 align='center'>Teachers name!</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/khan.png'>
							<h3 align='center'>Teachers name!</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/khan.png'>
							<h3 align='center'>Teachers name!</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/khan.png'>
							<h3 align='center'>Teachers name!</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
					<div class='teachers'>
						<div class='teacher'>
							<img src='Images/Teachers/khan.png'>
							<h3 align='center'>Teachers name!</h3>
							<p align='center'>Information about this teacherInformation about this teacherInformation about this teacher dkjfklkjdklf</p>
						</div>
						<a href="teachers.php?id=<?php echo $row['id'];?>">More!</a>
					</div>
				</div>
				
				<div class='comments'>
				<h1 align='center' id='comment-h1'>Your Comments</h1>
					<div class='write-comment'>
						<form method='post' action='Includes/comment.php'>
							<input type='text' name='email' placeholder='Email Address........'>
							<textarea placeholder='Comments.........'cols='30' rows='5'name='comment'></textarea>
							<input type='submit' value='Comment'name='c'>
						</form>
					</div>
					<div class='replay-comment'>
						<iframe src='Includes/comment.php'></iframe>
					</div>
				</div>
			</div>
		
		</div>
<?php include_once 'Includes/footer.php';?>
	</body>
</html>
