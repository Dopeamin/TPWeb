<?php
session_start();
include_once "autoload.php";
$email = $_POST['email'];
$password = $_POST['pwd'];

if (isset($email)&&isset($password)) {
    $persorepo = new PersonneRepository();
    $user = $persorepo->getUserByEmail($email);
    
    if($user == FALSE){
        $_SESSION['errorMessage']="Veuillez vérifier vos credenitalsss";
        echo $email;
    }else if($user->userpassword==$password){
        $_SESSION['user']=$email;
        $log = new LogWriter("Logged into his account",$user->username);
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