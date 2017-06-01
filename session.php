<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connect= mysqli_connect("localhost", "stringdot", "Ninja123");
// Selecting Database
$db = mysqli_select_db("ddbase", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_username'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query("select username from login where username='$user_check'", $connect);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connect); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
