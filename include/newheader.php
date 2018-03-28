<!DOCTYPE html>
<html>
<?php include("include/init.php"); ?>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet"   type="text/css" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<header>
		<nav class=" nav ">
			<div class="main-wrapper">
				<ul>
					<li>
						<a href="home.php">Home</a>
					</li>
				</ul>

				<div class="nav-login">

				 

	
				<form action="include/login.inc.php" method="post">

					<input type="text" name="username" placeholder="username">
					<input type="password" name="password" placeholder="password">
					<button type="submit" name="submit">submit</button>
					</form>
			
	

					<a href="signup.php">signup</a>
					

				</div>

			</div>
		</nav>
		

	</header>