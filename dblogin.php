<?php
session_start();

$uname = $_POST['email'];
$pass = $_POST['password'];
if($uname == "admin@gmail.com" && $pass == "admin2024"){
        $_SESSION['adminloggedin'] = true;
        header('Location:usersList.php');
        exit();
    
}

?>