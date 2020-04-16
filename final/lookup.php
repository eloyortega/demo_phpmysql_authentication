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
		.error{
			color:#f00;
		}
		.profilecontainer{
			margin:0px auto;
			text-align: center;
		}
		.profilecontainer img{
			padding-bottom:10px;
			border: 10px #bbb double;
			width:300px;
			height:300px;
			border-radius: 50%;
			padding:10px;
		}
		.profilecontainer span{
			display: inline-block;
			width:49%;
		}
		.profilecontainer .left{
			text-align: right;
		}
		.profilecontainer .right{
			text-align: left;
		}
	</style>
</head>
<body>
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>
	<h2>Lookup</h2>
	<!-- Upon submission we are going to rerun this file which will execute the php code below -->
	<form method="get">
		<label>UserName:<br>
			<input type="text" name="user" required>
			<span class="error">*</span>
		</label>

		<input type="submit" name="submit" value="Submit">  
	</form>

<?php
// the Declare global variables
	global $u;
	global $i;
	global $n;
	global $e;

// declare a function where the global variables have default values
	function dft (){
		global $u;
		global $i;
		global $n;
		global $e;
		$u = "user";
		$i = "default.png";
		$n = "name";
		$e = "email";
	};

// check if there is a value inside the user form field. if so check if the users directory exist. If it does reassign the default variables with information contained within the user folder. I.e. The image source the users name user email. Else run the function to reassign the variables to their default value.
	if(isset($_GET['user'])) {
		$u = $_GET['user'];
		if (file_exists("users/$u")){

			if (file_exists("users/$u/image.jpg")){
				$i = "users/$u/image.jpg";
			} else {
				$i = "users/$u/image.png";
			}

			$pr = file("users/$u/profile.txt");
			$n = trim($pr[0]);
			$e = trim($pr[1]);

		} else{
			dft();
		}
	} else {
		dft();
	}

?>

<!-- echo the variables in various places Display on the page-->
<div class="profilecontainer">
	<img src="<?php echo $i ?>">
	<h3>
		<span class="left">User:&nbsp;</span>
		<span class="right"><?php echo $u ?></span>
		<span class="left">Name:&nbsp;</span>
		<span class="right"><?php echo $n ?></span>
	</h3>
	<h4>
		<span class="left">Email:&nbsp;</span>
		<span class="right"><?php echo $e ?></span>
	</h4>
</div>

</body>
</html>