<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<style>
		*{
			font-family: sans-serif;
		}
	</style>
</head>
<body>
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<h2>Login</h2>
<!--Echo all our super global session variables within our HTML-->
<p>Your ID is: <?php echo $_SESSION['uid']; ?> </p>
<p>Your TIME is: <?php echo $_SESSION['time']; ?> </p>
<p>Your NAME is: <?php echo $_SESSION['name']; ?> </p>
<p>Your EMAIL is: <?php echo $_SESSION['email']; ?> </p>
<p>Your PASSWORD is: <?php echo $_SESSION['pw']; ?> </p>

<p><a href="logout.php">logout</a></p>

</body>
</html>