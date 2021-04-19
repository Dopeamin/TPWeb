
session_start();
include_once 'home.php';
$name=$_POST['deletebyname'];
if (isset($name)){
$request = "delete from personnes where nom=? ";
$bddd=$GLOBALS['a'];
$req = $bddd->prepare($request);
$req->execute([$name]);
    header('location:home.php');
}else {
    header('location:home.php');
}*/
<?php
include_once "autoload.php";
$name=$_POST['deletebyname'];
if (isset($name) && $name!=""){
    $p=new PersonnesRepository();
    $p->supprimer($name);
}
header('location:home.php');



