<div class = "top_band"></div>
<div class = "top_x">

	<form class = "navbar2_form" action="logout.php" method="post">
		<a href='/profile.php'><img class = "avatar" src="Images/avatar_baiat.png" width="24" height="24"></a>
		<?php 
		$_SESSION['login_username'] = strtoupper($_SESSION['login_username']); 
		//echo $_SESSION['login_username'];
		$usr = $_SESSION['login_username'];

		echo "<span style=\"color:white;font-size: 10pt; font-family:Arial; vertical-align: 7px; \"> &nbsp;&nbsp;$usr </span>";
		?>
		<button type="submit" name="submit" class = "button_logout_top"> Log Out </button>
	</form>
</div>