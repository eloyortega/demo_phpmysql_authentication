<?php ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php ?>

<h2>REGISTRATION</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="postprocess.php" enctype ='multipart/form-data'>
<label>Name
	<input type="text" name="name" required><span class="error">*</span><br>
</label>
<br>
<label>E-mail
	<input type="email" name="email" required><span class="error">*</span><br>
</label>
<br>
<label>User Name
	<input type="text" name="user" required><span class="error">*</span><br>
</label>
<br>
<label>Password
	<input type="password" name="pw" required><span class="error">*</span><br>
</label>
<br>
<label>Photo:
	<input type="file" name="photo"><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>