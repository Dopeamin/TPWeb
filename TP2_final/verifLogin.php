<?php
session_start();
$email=$_POST['email'];
$pwd=$_POST['pwd'];
if( isset($email) && isset($pwd)){
    if($email=='as@as.as' && $pwd == "0000"){
    $_SESSION['before']="as";
    header('location:home.php');
}else{
    $_SESSION['errorMessage']="Veuillez vérifier vos credentitals";
    header('location:login.php');
}}
else{
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:login.php');
}
