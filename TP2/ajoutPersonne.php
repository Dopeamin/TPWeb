<?php
include_once "autoload.php";

if(isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPassword']) && isset($_POST['age']) && isset($_FILES['image'])){
    $repo = new PersonneRepository();
    $pic=uniqid();
    $name = explode(".", $_FILES['image']['name']);
    $extension = end($name);
    $fullname = $pic .".". $extension;
    if(copy($_FILES['image']['tmp_name'], "images/".$fullname)){
        $_SESSION['errorMessage']="Le fichier est valide, et a été téléchargé
               avec succès. Voici plus d'informations :\n";
               $user = new Personne($_POST['userName'],$_POST['userEmail'],$_POST['userPassword'],$_POST['age'],$fullname);
            $repo->addUser($user);
            $_SESSION["errorMessage"]="User Added";
            header('location:home.php');
    }  
    header('location:home.php');
        
    
}else{
    echo"Fill all fields";
}

?>