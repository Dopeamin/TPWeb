<?php
include_once 'personnes.php';
include_once 'Repository.php';


class PersonnesRepository extends Repository
{   private $nom;
    private $prenom;
    private $age;
    private $section;
    private $picture;
    public function __construct($nom = '', $prenom = '', $age = 0, $section = '',$picture='607d8efc6ee8113.0')
    {   parent::__construct('personnes');
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->section = $section;
        $this->picture=$picture;

    }

}
