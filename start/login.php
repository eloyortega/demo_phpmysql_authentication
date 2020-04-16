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
<form method="post" action="login.php">
<label>E-mail
	<input type="email" name="email"  value="" required><br>
</label>
	<br>
<label>Password
	<input type="password" name="pw" value="" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">
</form>

<?php ?>

</body>
</html>