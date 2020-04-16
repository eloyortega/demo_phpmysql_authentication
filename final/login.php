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

<?php

if(isset($_POST['submit'])){

	if (empty($_POST['email']) || empty($_POST['pw'])) {
		echo "Username or Password is invalid";
	} else {
		$e = $_POST['email'];
		$p = $_POST['pw'];

		//mamp users connection
		$cnt = mysqli_connect("localhost", "root", "root", "DBNAME");
		$qry = "select * from TBNAME where pw='$p' AND email='$e'";

		$login = mysqli_query($cnt, $qry);

		print_r($login);

		$row = $login->num_rows;

		echo $row;

		echo "<hr>";

		if ( $login->num_rows == 1 ) {
			$a = mysqli_fetch_assoc($login);
			print_r($a);
			//echo "<hr>$a['uid']<br>$a['time']<br>$a['name']<br>$a['email']<br>$a['pw']";
			$_SESSION['uid'] = $a["uid"];
			$_SESSION['time'] = $a["time"];
			$_SESSION['name'] = $a["name"];
			$_SESSION['email'] = $a["email"];
			$_SESSION['user'] = $a["user"];
			$_SESSION['photo'] = $a["photo"];
			$_SESSION['pw'] = $a["pw"];
			echo "<a href=\"profile.php\">proceed to profile</a>";
		} else {
			echo "try again";
		}
		// Closing Connection
		mysqli_close($cnt);
	}

}
?>

</body>
</html>