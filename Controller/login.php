<?php

    session_start();
    $logn=array('mariem',"ahmed","imen");
    $motpass=array('m123',"a123","i123");
    //test if les deux champs vides
   
    $_SESSION['messageP']="";
    $_SESSION['messageColor']="danger";

    $psotLogin=$_POST['pseudo'];
    $psotPass=$_POST['password'];
    
    if(isset($psotLogin) and (isset($psotPass))){
        if(in_array($psotLogin, $logn) and in_array($psotPass, $motpass) ){
            $_SESSION["login"]=$psotLogin;
            $_SESSION["password"]=$psotPass;
            $_SESSION['messageP']="";
            $hour = time() + 3600 * 24 * 30;
            setcookie('login', $psotLogin, $hour);
            setcookie('password', $psotPass, $hour);

            header('location:../crudproduit.php');

        }
        else{
            $_SESSION['messageP']="verifier Vos champs ";
            header('location:../login.php');

        }

    }
    else{
        $_SESSION['messageP']="champs vide ";

    }

    
   
   
?>