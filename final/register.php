<?php session_start();// Starting Session ?>
<!--start our HTML -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<h2>REGISTRATION</h2>
<p><span class="error">* required field.</span></p>

<!--
3 new attributes needed to process user inputs.
METHOD accepts either 'post' or 'get.' We use post to store data privately.
ACTION tells the form where to send the data. This will be where the user lands when submit is clicked.
ENCTYPE specifies how form data should be encoded. We specify Multipart to carry media from the file field.
Pay attention to the INPUT NAME ATTRIBUTES, 'name', 'email', 'user', 'pw', and 'photo.' This is how we identify the bits of data in the next file.
-->
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