<?php
session_start();
require_once("dbconnect.php");

//  verifica daca exista date transmise
if ($_POST['register_name'] != '' && $_POST['register_username'] != "" && $_POST['register_password'] != "" && $_POST['register_email'] != "" && $_POST['register_gender'] != "") {

    // preia datele din formular
    $name = $_POST['register_name'];
    $username = $_POST['register_username'];
    $password = md5($_POST['register_password']);
    $email = $_POST['register_email'];
    $gender = $_POST['register_gender'];

    // formeaza si executa query-ul de inserare in baza de date
    $query ="INSERT INTO users (name,username,password,email,gender) VALUES ('$name','$username','$password','$email','$gender')";
    $result = mysqli_query($connect,$query) or die ( "Error : ". mysqli_error($connect) );

    // afiseaza un mesaj de succes
    if ($result) {
        echo "Inregistrarea a fost efectuata cu succes.<br>
            Click <a href='/index.php'>aici</a> pentru a reveni la pagina de login";
    }
}
?>