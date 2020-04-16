<nav>
	<ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="register.php">REGISTER</a></li>
		<li><a href="lookup.php">LOOKUP</a></li>
		<li><a href="login.php">LOGIN</a></li>
		<?php
			//Display the following two links only if the session variable ID exists
			if(isset($_SESSION['uid'])){
				echo '<li><a href="profile.php">PROFILE</a></li>';
				echo '<li><a href="admin.php">ADMIN</a></li>';
				echo '<li><a href="logout.php">LOGOUT</a></li>';
				echo '<li><a href="confirmed.php">HELLO, '. $_SESSION['name'] .'</a></li>';
			}
		?>
	</ul>
</nav>