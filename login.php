<?php
$error=''; 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST['submit'])) {
if (empty($_POST['login_username']) || empty($_POST['login_password'])) {
$error = "Username or Password is invalid";
//echo $error;
}
else
{

$username=$_POST['login_username'];
$password=$_POST['login_password'];

$connect = mysqli_connect("localhost", "stringdot", "Ninja123") or die( mysqli_error()) ;	
$db = mysqli_select_db($connect, "ddbase") or die( mysqli_error($connect));

// To protect MySQL injection 
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysqli_real_escape_string($connect, $username);
//$password = mysqli_real_escape_string($connect, $password);
$password = md5($password);

$query = "SELECT * from users where password='$password' AND username='$username'";
$result = mysqli_query($connect,$query) or die ( "Error : ". mysqli_error($connect) );
$rows = mysqli_num_rows($result);
if ($rows==1) {
session_start(); 
$_SESSION['logged'] = true;
$_SESSION['login_username'] = $username; // Initializing Session
header("location: /profile.php/$username"); // Redirecting To Profile page
exit();
} else {
$_SESSION['logged']=false;
$error = "Username or Password is invalid </br>";
echo $error;
echo "Click <a href='/index.php'>aici</a> pentru a incerca din nou";

}
mysqli_close($connect); // Closing Connection

}
}
?>

