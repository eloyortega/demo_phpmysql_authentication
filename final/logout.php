<?php session_start();
// destroy the session first used start session to collect the variables
// then use the session_destroy method to end the session
// finally redirect the user to the login page
session_destroy();

header('location: login.php');

?>
