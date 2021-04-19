<?php
include_once 'autoload.php';
$name=$_POST['ajoutname'];
$prenom=$_POST['ajoutprenom'];
$age=$_POST['ajoutage'];
$section=$_POST['ajoutsection'];
if(isset($name) &&($age>0)){
    $p=new PersonnesRepository;
    $pic=uniqid().$_FILES['ajoutpic']['name'];
        $pat='classes+pictures/pictures/'.$pic;
        copy($_FILES['ajoutpic']['tmp_name'],$pat);

        $p->ajouter($name,$prenom,$age,$section,$pic);
}
header('location:home.php');

