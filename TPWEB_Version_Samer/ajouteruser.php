<?php

include_once '../autoload.php';

session_start();

//1
$name = $_POST['ajoutname'];
$prenom = $_POST['ajoutprenom'];
$age = $_POST['ajoutage'];
$section=$_POST['ajoutsection'];

if (isset($name) && isset($prenom) && isset($age) && isset($section)) {
    $bd = BDuser::getInstance();
    $request="insert into etudiant (nom,prenom,age,section) VALUES ('".$name."','".$prenom."','".$age."','".$section."')";
    $rep = $bd->prepare($request);
    $rep->execute();
    header('location:home.php');

}else{
    header('location:home.php');

}
