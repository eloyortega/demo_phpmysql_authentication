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
<?php require_once "nav.php"; ?>
	<h2>Lookup</h2>
	<form method="post">
		<label>UserName:<br>
			<input type="text" name="user" required>
			<span class="error">*</span>
		</label>

		<input type="submit" name="submit" value="Submit">
	</form>

<?php ?>

<div class="profilecontainer">
	<img src="<?php ?>">
	<h3>
		<span class="left">User:&nbsp;</span>
		<span class="right"><?php ?></span>
		<span class="left">Name:&nbsp;</span>
		<span class="right"><?php ?></span>
	</h3>
	<h4>
		<span class="left">Email:&nbsp;</span>
		<span class="right"><?php ?></span>
	</h4>
</div>

</body>
</html>