<?php
session_start();

if($_SESSION['logged'] == true){
	$username = $_SESSION['login_username'] ;	
	$username = strtolower($username); //il facem uppercase
	echo "Welcome ".$username;
	echo "</br>Press <a href='/index.php'> here </a> to go to the home page";
	echo "</br>Click <a href='/logout.php'> here </a> to log out.";
}
else {
echo " </br></br></br>You must login first to see this section ";
header("refresh:4;url=/index.php");
}
?>

<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--scalare pagina in functie de dispozitiv -->
     <link rel="stylesheet" type="text/css" href="../profile.css">
<html>

<body>



</body>
</html>