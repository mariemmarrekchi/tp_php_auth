<?php
    session_start();
    if(isset($_SESSION['login']) && isset($_SESSION['password'])) {
        setcookie($_SESSION['login'], $_SESSION['password']);
        unset($_SESSION['login']);
        unset($_SESSION['password']);
        
    }
    $_SESSION['messageP']="vous étes maintenant déconnecté";
    $_SESSION['messageColor']="success";
    //session_unset();
   
    header('location:../login.php');

    ?>