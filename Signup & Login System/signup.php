<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card my-auto shadow" style="width: 16rem">
				<div class="card-header text-center bg-primary text-white">
					<h2>Signup Form</h2>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="Username" class="form-label">Username</label>
							<input type="text" id="" class="form-control" name="user_name"/>
						</div>
						<div class="form-group">
							<label for="password" class="form-label">Password</label>
							<input type="password" id="" class="form-control" name="password"/>
						</div>
						<input type="submit" class="btn btn-warning mt-2 w-100" value="Signup" name="">
						<a href="login.php" class="btn btn-primary mt-2 w-100">Click to Login</a>
					</form>
				</div>
				<div class="card-footer">
					<small>&copy; Signature</small>
				</div>
			</div>
		</div>    
	</div>

</body>
</html>
