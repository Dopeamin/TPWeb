<?php
include_once 'isauthentified.php';

session_start();
$email = $_POST['email'];
$mdp = $_POST['mdp'];
include_once '../autoload.php';




if(isset($email) && isset($mdp) && isauthentified($email,$mdp) ){
    header('location:login.php');
    $_SESSION['user']="user";



}else{
    header('location:login.php');
    $_SESSION['error']="L'adresse email ou le mot de passe  est incorrect Veuillez vérifier vos credenitals !!";

}