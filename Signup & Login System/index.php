<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-4">
		<h3>Welcome, <?php echo $user_data['user_name']; ?></h3>
		<div class="jumbotron text-black p-3 text-center">
            <h1>This is the User Page </h1>
    	</div>

		<br>
		<a href="logout.php" class="btn btn-outline-secondary">Logout</a>
	</div>
</body>
</html>