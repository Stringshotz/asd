<?php
session_start();
require_once("dbconnect.php");
//include('login.php'); // Includes Login Script

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//if(isset($_SESSION['login_username'])){
//header("location: profile.php");
//}

?>

<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--scalare pagina in functie de dispozitiv -->
     <link rel="stylesheet" type="text/css" href="index.css">
<html>

<body>

<!------TOP BAND ------>
<?php 
if($_SESSION['logged'] == true){
  include("navbar2.php"); }
  else {
     include("navbar1.php"); }

?>



<!-------BANNER------>
<img class = "banner" src="Images/bannerx3.png" alt="banner">



<!-------MENU------>
<div class = "top_band2"></div>
<nav>
 <ul>
  <li class = "current-item"><a href = "index.php"> HOME </a></li>
  <li><a href = "profile.php">PROFILE</a></li>
  <li><a href = "contact.php">CONTACT</a></li>

 </ul>

</nav>


<div class = "body">
<br>
<h1 style = "font-family:Times New Roman"> Welcome </h1>
<p class = "welcome"> Let's say that you had a wonderfull day and you want a place where your thoughts
would be readed and apreciated. Or let's say that you had worst day of your life and
you want to hang out to somebody.
    This is the right place! 
    "Dear Diary" is a social networking site where you cand keep your journal public 
or private. 

</div>


<footer>
    <p class = "footer_text"> COSMIN ISTUDOR &#x00a9;  2017</p>
    <div class = "footer_band"></div>  
    
</footer>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





</body>
</html>


</head>
</html>
