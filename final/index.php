<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CheatSheet</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
//this is a comment

/*this is
a multi-line code*/

//inject a required php file
require_once "nav.php";

//echo prints a string into our HTML
echo "<h1>hello world</h1>";

//this line will be repeated throughout and act as our seperator
echo '<br><hr><br>';

//this is a var with mathematics
$bob = 9 % 4;

//this echos a var concatanated with a string
echo "bob = ".$bob;

echo '<br><hr><br>';

//another var
$sam = 4 + 9;

echo $sam;

echo '<br><hr><br>';

//Assignment operator
$sam = $sam += 3;

$joe = $sam;

$jay = $sam;

//Assignment Operator
$joe -= 10;

//concatinate operator
$jay .= $joe;

echo $sam."<br>".$joe."<br>".$jay."<br>";

echo '<br><hr><br>';

//an array
$abe = array('one','two','three');

//call index of array
echo $abe[1];

echo '<br><hr><br>';

//double quote string
echo "double quote strings read a variable like this: $jay";

echo '<br><hr><br>';

//single quote string
echo 'single quote strings read a variable like this: $jay';

echo '<br><hr><br>';

//how to add a quote in a string
echo 'add a single quote \' to a string';

echo '<br><hr><br>';

//add whitespace to strings
echo "this is a \r \t multiline string";

echo '<br><hr><br>';

//another way of writing multiline strings
echo <<<_multi
this is also a
"multiline"
_multi;

echo '<br><hr><br>';

//this var is a number
$eve = 5;

//incremental after statement...
echo $eve++;

echo '<br><hr><br>';

//... and as the statement is run
echo ++$eve;

echo '<br><hr><br>';

//this is an if statement
if ( $eve > 4 && $eve < 10 ) echo "Eve was set to $eve";

echo '<br><hr><br>';

// Xor is a unique condition where only one value can be true
if ( $eve > 4 xor $eve > 10 ) echo "Only 1 xor condition is true";

echo '<br><hr><br>';
		
// this is an example of a constant
echo "This is line " . __LINE__ . " of file " . __FILE__;

echo '<br><hr><br>';

// take two numbers and multiply them
$number = 12345 * 67890;

echo $number;

echo '<br><hr><br>';

//get the substring from the multiplied number
echo substr($number, 3, 2);

echo '<br><hr><br>';

//in mathematical operations, parentheses take precedence
echo 2 * (5 - 5);

echo '<br><hr><br>';

// this is an example of and array containing arrays
$oxo = array(
	array('a', 'b', 'c'),
	array('d', 'e', 'f'),
	array('g', 'h', 'i')
);

// print our displays human readable values
// in this example we  print index 0 of the array
print_r(array_values($oxo[0]));

echo '<br><hr><br>';

// to return the value  within a multidimensional array we first call the index of the sub array then the index within it
echo $oxo[1][2];

echo '<br><hr><br>';

// here's another array
$paper = array("Copier","Inkjet","Laser","Photo");

// and here is a looping structure
for ($j=0;$j<4;++$j) {
	echo "$j : $paper[$j] <br>";
}

echo '<br><hr><br>';

// and here is a for/each loop
$a = 0;
foreach( $paper as $item) { 
	echo "$a: $item <br>"; 
	++$a;
}

echo '<br><hr><br>';

// this code demonstrates two things
// is_array is a method to check whether not a variable is an array
// this is also a syntax for a quick if statement
echo (is_array($paper)) ? "Is an array" : "Is not an array";

echo '<br><hr><br>';

// Count as a method to get the total values within an array
echo count($paper);

echo '<br><hr><br>';

// explode will  convert is string into an array
$temp = explode(' ', "This is a sentence with seven words"); 

print_r($temp);

echo '<br><hr><br>';

// extract Will take an associative array and split it into separate variables converting keys into variables and  values into variable values
$var_array = array("color" => "blue",
				"size"  => "medium",
				"shape" => "sphere");
extract($var_array);

echo "$color, $size, $shape";

echo '<br><hr><br>';

// compact Will convert a list of variables into an array
$fname = "Marvin"; 
$sname = "Martian"; 
$planet = "Mars"; 
$system = "Sol"; 
$galaxy = "Milky Way"; 
$contact = compact('fname', 'sname', 'planet', 'system', 'galaxy'); 
print_r( $contact);

echo '<br><hr><br>';

// this is a function
function dolunch(){
	echo "lets eat!";
}

$hour = 13;

// and here we call the function in an if statement
if ($hour > 12 && $hour < 14) {
	dolunch();
};

echo '<br><hr><br>';

// Time is a prebuilt object
echo time();

echo '<br><hr><br>';

// so is Date but you needs a parameter of time to display correctly
function longdate($timestamp) { 
	return date("l F jS Y", $timestamp);
}

echo longdate(time());

echo '<br><hr><br>';

echo date("l F jS Y h m a");

echo '<br><hr><br>';

// use the defined method to create constants
// Constants work exactly like variables except they cannot be redefined once set
define("ROOTLOCATION", "/usr/local/www/");
define("ROOTLOCATION", "reset/this");
$win = ROOTLOCATION;

echo $win;

echo '<br><hr><br>';

// a variable set within the function can not be called outside the function
function vartest(){
	$var = "Hello<br>";
	echo $var;
}
vartest();

echo "calling var: ".$var;

echo '<br><hr><br>';

// a variable created outside of A function cannot be called in a function without parameters
$var2 = "hey";

function vartest2(){
	echo "calling var2: ". $var2;
}

vartest2();

echo '<br><hr><br>';

function vartest3($greet){
	echo "calling var2: ". $greet;
}

vartest3($var2);

echo '<br><hr><br>';

// another way is to define the variable with the keyword global
global $var3;
$var3 = 1;
$ano = function(){
	global $var3;
	$var3 = ($var3 + 3);
	echo "calling var3 in Function: ".($var3+1);
};

echo $ano();

echo '<br>';

echo "calling var3 again: ".$var3;

echo '<br><hr><br>';

// Booleans are returned as either one or zero
echo 'true looks like this:' . (1 == 1);

echo '<br>';

echo 'false looks like this:' . (1 == 2);

echo '<br><hr><br>';

// this is an If/else statement
$conCheck = 3;

if ($conCheck == 1) {
	echo 'if statement is true';
} else if ($conCheck == 3) {
	echo 'elseif statement is true';
} else {
	echo 'else statement is true';
}

echo '<br><hr><br>';

// this is a for loop
for ($monkeys = 5 ; $monkeys > 0 ; --$monkeys) {
	echo $monkeys." little monkeys jumping on the bed<br>
	One fell off and bumped her head<br>
	Momma called the doctor and the doctor said<br>
	No more monkeys jumping on the bed<br><br>";
}

echo '<br><hr><br>';

// this will create an object
class User {
	public $name, $password;
	function save_user() {
		echo 'hi '.$this->name." | ".$this->password."<br>";
		
	}
}

// this will create a new instance of an object
$object1 = new User;
$object1->name = "Bob";
$object1->password = "12345";

// this will clone an object
$object2 = clone $object1;
$object2->name = "Amy";
$object2->password = "ABCDE";

print_r($object1);

echo '<br>';

echo $object1->name;

echo '<br>';

echo $object2->name;

echo '<br>';

$object2->save_user();

echo '<br><hr><br>';

// this will extend an object
class Dad {
	function test() {
		echo '[Class Dad] I am your Father <br>';
	}
}

class Son extends Dad {
	function test() {
		echo '[Class Son] I am Luke <br>';
	}
	function test2() {
		self:: test();
		parent:: test();
	}
}

echo '<br><hr><br>';

$ob = new Son;
$ob->test();

echo '<br><hr><br>';

$ob->test2();

echo '<br><hr><br>';

// and here some super globals for reference
//echo phpinfo();

echo '<br><hr><br>';

print_r(array_values($GLOBALS));
?>
</body>
</html>