<?php session_start();// Starting Session ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<style>
		table, td {
			border: 1px solid #000;
		}
		th{
			background: #000;
			color:#fff;
			padding:10px;
		}
		td:first-child ~ td {
			padding: 20px;
		}
		
		img{
			width:70px;
		}
	</style>
</head>
<body>
	<?php require_once "nav.php"; ?>
<table>
	<tr>
		<th>image</th><th>name</th><th>email</th><th>user</th><th>pw</th>
	</tr>

	<?php

		//connect to database
		$cnt = mysqli_connect("localhost", "root", "root", "DBNAME");

		//sql statement to capture all data from a table
		$sql = "SELECT * FROM TBNAME";

		//query by connecting and adding sql statement
		$result = mysqli_query($cnt,$sql);
		//print_r($result);

		foreach($result as $v) {
			//print_r($v);
			echo '<br>';
			echo '<tr><td><img src="'.$v['photo'].'"></td><td>'.$v['name'].'</td><td>'.$v['email'].'</td><td>'.$v['user'].'</td><td>'.$v['pw'].'</td></tr>';
		}

		//close the connection
		mysqli_close($cnt); // Closing Connection
	?>
</table>
</body>

</html>
