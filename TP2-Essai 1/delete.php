<?php
    include_once "autoload.php";
    $email = $_GET['email'];
    if(isset($email)){
        $repo = new PersonneRepository();
        $repo -> removeUser($email);
        $_SESSION["errorMessage"]="User Deleted";
        header('location:home.php');
    }else{
        header('location:home.php');
    }
?>