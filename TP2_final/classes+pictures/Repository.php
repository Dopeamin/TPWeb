<?php
include_once 'ConnexionBD.php';

class Repository
{
    protected $bd;
    protected $tableName;
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->bd = ConnexionBD::getInstance();
    }

    public function findAll() {
        $request = "select * from ".$this->tableName;
        $response =$this->bd->prepare($request);
        $response->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function findByname($cur) {
        $request = "select * from personnes where nom ='".$cur."'";
        $response =$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function supprimer($name) {
        $request = "delete  from personnes where nom = '".$name."'";
        $pic=$this->findByname($name);
        unlink('/pictures/$pic->picture');
        $response =$this->bd->prepare($request);
        $response->execute();



    }
    public function modifier($cur,$name,$prenom,$age,$section,$pic){
        $requete="update personnes set nom='".$name."' , prenom='".$prenom."', age='".$age."' , section='".$section."' ,picture='".$pic."' where nom='".$cur."'";
        $rep=$this->bd->prepare($requete);
        $rep->execute();
    }
    public function ajouter($name,$prenom,$age,$section,$pic){
        $request="insert into personnes (nom,prenom,age,section,picture) VALUES ('".$name."','".$prenom."','".$age."','".$section."','".$pic."')";
        $rep=$this->bd->prepare($request);
        $rep->execute();

    }
}
