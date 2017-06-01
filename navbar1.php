<div class = "top_band"></div>
<div class = "top_x">

	<form action="login.php" method="post">
	   <input class="input_form_login_top" type="text" id="login_username" placeholder="username" name="login_username"required>
	   <input class="input_form_login_top" type="password" id="login_password" placeholder="password" name="login_password" required>
        <button type="submit" name="submit" class = "button_login_top"> Login </button>
	

	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="button_signup_top"> Sign Up</button>
	</form>
  </div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="register.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="logo.png" alt="logo" class="avatar">
    </div>

    <div class="container">

	<label for="name">Name:</label></br>
        <input class="form_signup" type="text" id="register_name" name="register_name"required>
	</br>
        <label for="username">Username:</label></br>
        <input class="form_signup" type="text" id="register_username"name="register_username"required> 
	</br>
        <label for="mail">Email:</label></br>
        <input class="form_signup" type="email" id="register_email" name="register_email" required>
	</br>
        <label for="password">Password:</label></br>
        <input class="form_signup" type="password" id="register_password" name="register_password" required>
	</br>
        <label>Sex</label>
	</br>
        <input type="radio" id="register_gender" name="register_gender" value="male" > Male<br>
        <input type="radio" id="register_gender" name="register_gender" value="female"> Female<br>
	</br>
	
       
        <button type="submit" class = "button_signup_form">Sign Up</button>
	</br>
        
</div>
	</br>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

