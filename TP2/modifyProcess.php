<?php
session_start();
include_once "autoload.php";

if(isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['age']) && isset($_FILES['image'])){
    $repo = new PersonneRepository();
    $pic=uniqid();
    $user = $repo->getUserByEmail($_POST['userEmail']);
    unlink("images/".$user->picture);
    $name = explode(".", $_FILES['image']['name']);
    $extension = end($name);
    $fullname = $pic .".". $extension;
    if(move_uploaded_file($_FILES['image']['tmp_name'], "images/".$fullname)){
            $user = new Personne($_POST['userName'],$_POST['userEmail']," ",$_POST['age'],$fullname);
            $repo->modifyUser($user);
            $log = new LogWriter("Modified account ".$_POST['userName'],$_SESSION['user']);
            $log->writeLog();
            header('location:home.php');
    }  
    header('location:home.php');
        
    
}else{
    header('location:home.php');
}

?>