<?php

session_start();

if(!$_SESSION['email']){
    header('Location: acesso.php');
    exit();
    if(!$_SESSION['senha']){
    header('Location: acesso.php');
    exit();
    }
}


?>