<?php
session_start();
include_once "autoload.php";
$email = $_POST['email'];
$password = $_POST['pwd'];

if (isset($email)&&isset($password)) {
    $persorepo = new PersonneRepository();
    $user = $persorepo->getUserByEmail($email);
    if($user == null){
        $_SESSION['errorMessage']="Veuillez vérifier vos credenitalsss";
        header('location:login.php');
    }else if($user->userPassword==$password){
        $_SESSION['user']=$email;
        header('location:home.php');
    }else{
        $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
        header('location:login.php');
    }
} else {
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:login.php');
}