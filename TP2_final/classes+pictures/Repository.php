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
        $request = "select * from personnes where nom = ?";
        $response =$this->bd->prepare($request);
        $response->execute([$cur]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function supprimer($name) {
        $request = "delete  from personnes where nom = ?";
        $pic=$this->findByname($name);
        unlink('/pictures/$pic->picture');
        $response =$this->bd->prepare($request);
        $response->execute([$name]);



    }
    public function modifier($cur,$name,$prenom,$age,$section,$pic){
        $requete="UPDATE ".$this->tableName." SET nom=? , prenom=?, age=? , section=? ,picture=? where nom=?";
        $rep=$this->bd->prepare($requete);
        $rep->execute([$name,$prenom,$age,$section,$pic,$cur]);
    }
    public function ajouter($name,$prenom,$age,$section,$pic){
        $request="INSERT INTO  personnes (`nom`, `prenom`, `age`,`section`,`picture`) VALUES (?,?,?,?,?)";
        $rep=$this->bd->prepare($request);
        $rep->execute([$name,$prenom,$age,$section,$pic]);

    }
}
