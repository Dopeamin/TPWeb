<?php
    session_start();
    include_once "autoload.php";
    $email = $_GET['email'];
    if(isset($email)){
        $repo = new PersonneRepository();
        $user = $repo->getUserByEmail($email);
        unlink("images/".$user->picture);
            $repo -> removeUser($email);
            $log = new LogWriter("Deleted account ".$email,$_SESSION['user']);
            $log->writeLog();
        
        header('location:home.php');
    }else{
        header('location:home.php');
    }
?>