<html>
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--scalare pagina in functie de dispozitiv -->
    <title>Sign Up</title>
    <link rel="stylesheet" href="register_page.css">

    </head>

    <body>

     <form name="register_form" action="register.php" method="post">

     <h1>Sign Up</h1>

            <label for="name">Name:</label>
            <input type="text" id="register_name" name="register_name" required>

            <label for="username">Username:</label>
            <input type="text" id="register_username" name="register_username"required> 

            <label for="mail">Email:</label>
            <input type="email" id="register_email" name="register_email" required>

            <label for="password">Password:</label>
            <input type="password" id="register_password" name="register_password" required>

            <label>Sex</label>
            <input type="radio" id="register_gender" name="register_gender" value="male" > Male<br>
            <input type="radio" id="register_gender" name="register_gender" value="female"> Female<br>

        <button type="submit">Sign up!</button>

     </form>

</body>
</html>