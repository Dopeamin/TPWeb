<?php
include_once '../autoload.php';

session_start();

//1
$ad=$_POST['ad'];
$mp=$_POST['mp'];
$mp1=$_POST['mp1'];

if (isset($ad) && isset($mp) && isset($mp1) && ($mp1==$mp)  ){
    $bd = BDuser::getInstance();
    $req="select * from user";
    $reponse =$bd-> query($req);
    $pers = $reponse->fetchAll(PDO::FETCH_OBJ );
var_dump($pers);
    $request="insert into user (email,mdp) VALUES ('".$ad."','".$mp."')";
    $rep=$bd->prepare($request);
    $rep->execute();

    header('location:home.php');
} else {
    header('location:login.php');   $_SESSION['user']="user";
}




