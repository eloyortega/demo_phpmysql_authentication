<?php session_start();
// start a session to carry variables between pages

echo ($_POST['name']);
echo ('<br>');
echo ($_POST['email']);
echo ('<br>');
echo ($_POST['user']);
echo ('<br>');
echo ($_POST['pw']);
echo ('<br>');
print_r ($_FILES['photo']);
echo ('<br>');
echo ($_FILES['photo']['name']);
echo ('<br>');
echo ($_FILES['photo']['type']);
echo ('<br>');
echo ($_FILES['photo']['tmp_name']);
echo ('<br>');
echo ($_FILES['photo']['error']);
echo ('<br>');
echo ($_FILES['photo']['size']);

//start an if statement using the ISSET method to validate that there is a value in the email field
//$_POST is a Super Global in PHP that carried the entered data from specific form fields.
//In this case it's the form field with the NAME of EMAIL.

if(isset($_POST['email'])) {
// take the phone data and store them in variables
	$n = $_POST['name'];
	$e = $_POST['email'];
	$p = $_POST['pw'];
//Similarly take data from the USER field and assign to 2 variables: $u will be used for the rest of this script
// $_SESSION is a super global that can be called and edited from Page to page since we started with a session on line 3
	$u = $_POST['user'];
	$_SESSION['user'] = $u;

/*Start the email proccessing*/
//Now that we have the form data stored, We can do things with it. Like sending an email.
//To do so, create a variable that contains the email body using a combo of srtings and variables
	$m = "Name: $n\n Email: $e\n UserName: $u";

//store the subject in a variable
	$s = "Message from $n"; 

//store the email recipient in a variable
	$t = "info@artbyeloi.com";

//create email headers, the hidden code on top of all emails, read by the mail client.
//regardless this configuration, the only thing that you would change on this line is if the $emails variable is the email address you want in the REPLY and FROM lines.
	$h = 'From: '.$t."\r\n".'Reply-To: '.$t."\r\n".'X-Mailer: PHP/'.phpversion();

//build your email using the mail method, using the parameters of the variables that you just created in this order...
//email recipient, email subject, email message, email headers
	mail($t, $s, $m, $h);

/*End email proccessing*/
/*Start the file Proccessing*/

//We will create a folder with The name of the user. And within this folder will be an image the user uploaded and a text file containing the text input Data values
//since the text document and the image will have the same file names regardless of the user
//we will uniquely name each directory by the username
	mkdir("users/$u");

// is the Fopen method to Create a text file with the name profile.txt, stored in the directory we just created.
// the second parameter "W" Gives us permission write in this file
	$f = fopen("users/$u/profile.txt", 'w') or die();

//Create a variable that contains the strings of all the data we want to store in the text document
	$t = "$n\n$e\n$u\n$p";

//use the fwrite method to call the file we created and insert the text
	fwrite( $f, $t) or die("Could not write to file");

//use the fclose method to close the text document after we've written to it
	fclose($f);

//run another if statement to validate if a photo was uploaded by the user. If true do the following...
	if ($_FILES) {
		//print_r($_FILES['photo']);
		//echo '<hr>';

//call the file type and check it against the following cases. When you find a match set the extension accordingly
		switch( $_FILES['photo']['type'] ) {
			case 'image/jpeg':
				$x = 'jpg';
				break;
			case 'image/png': 
				$x = 'png'; 
				break;
			default:
				$x = '';
				break;
		}
// run another if statement checking if $x has a value other than null
// as seen above this would mean $x would be either a PNG or a JPG
// if this is true Capture the temporary image location in variable. In addition create a variable of where you want the image to be stored, along with the file name.
		if ($x) {
			$j = $_FILES['photo']['tmp_name'];
			$i = "users/$u/image.$x"; 

//move the image from one directory to another and rename
			move_uploaded_file( $j, $i);

//finally store as a session variable to call later
			$_SESSION['img'] = $i;
		}

	} else {
		echo "No image has been uploaded";
	};

/*Start Store to SQL DB*/
//mamp users connection
		$cnt = mysqli_connect("localhost", "root", "root", "DBNAME");

		$qry = "INSERT INTO TBNAME (name, email, user, pw, photo) VALUES ('$n', '$e','$u','$p','$i');";

		echo $qry;

		mysqli_query($cnt, $qry);

		if (!$cnt) {
			echo "Error: " . $qry . "<br>" . $cnt->error;
		}

//Closing Connection
		mysqli_close($cnt); 
/*End Store to SQL DB*/

//Finally once all the data is processed, proceeded to user to the confirmation Page
	header('Location: confirmed.php');
}
?>