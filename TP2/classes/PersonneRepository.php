<?php
include_once 'autoload.php';

class PersonneRepository extends Repository
{
    
    public function __construct()
    {
        parent::__construct('personne');
    }
    public function getUserByEmail($email){
        $bdd = ConnexionBD::getInstance();
        $query = "select * from users where useremail = '".$email."'";
        $response = $bdd->prepare($query);
        
        $response->execute();
        $user = $response->fetch(PDO::FETCH_OBJ);
        return $user;
    }
    public function findAll(){
        $bdd = ConnexionBD::getInstance();
        $query = "select * from users";
        $response = $bdd->prepare($query);
        $response->execute();
        $user = $response->fetchAll(PDO::FETCH_OBJ);
        return $user;
    }
    public function addUser($user){
        $bdd = ConnexionBD::getInstance();
        $query = "Insert into users (username,useremail,userpassword,age,picture) VALUES ( '".$user->getUserName()."' , '".$user->getUserEmail()."' ,'".$user->getUserPassword()."','".$user->getAge()."','".$user->getPicture()."')";
        $response = $bdd->prepare($query);
        $response->execute();
    }
    public function removeUser($email){
        $bdd = ConnexionBD::getInstance();
        $query = "Delete FROM users WHERE useremail = '".$email."'";
        $response = $bdd->prepare($query);
        $response->execute();
    }
    public function modifyUser($user){
        $bdd = ConnexionBD::getInstance();
        $query = "update users set username = '".$user->getUserName()."' , useremail = '".$user->getUserEmail()."' , userpassword = '".$user->getUserPassword()."', age = '".$user->getAge()."', picture = '".$user->getPicture()."' WHERE useremail = '".$user->getUserEmail()."'";
        $response = $bdd->prepare($query);
        $response->execute();
    }
}