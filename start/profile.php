<?php ?>

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

<?php require_once "nav.php"; ?>

<h2>Login</h2>

<p>Your ID is: <?php ?> </p>
<p>Your TIME is: <?php ?> </p>
<p>Your NAME is: <?php ?> </p>
<p>Your EMAIL is: <?php ?> </p>
<p>Your PASSWORD is: <?php ?> </p>

<p><a href="logout.php">logout</a></p>

</body>
</html>