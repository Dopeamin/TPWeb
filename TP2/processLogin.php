<?php
session_start();
include_once "autoload.php";
$email = $_POST['email'];
$password = $_POST['pwd'];

if (isset($email)&&isset($password)) {
    if($email == "admin@gmail.com" && $password == "admin"){
        $_SESSION['user']=$email;
        $log = new LogWriter("Logged into admin","");
        $log->writeLog();
        header('location:home.php');
    
        
    }else{
        $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
        header('location:login.php');
    }
} else {
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:login.php');
}