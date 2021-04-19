<?php
class personnes  {
    private $nom;
    private $prenom;
    private $age;
    private $section;

    public function __construct($nom = '', $prenom = '', $age = 0, $section = '')
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->section = $section;

    }

    /**
     * @return mixed|string
     */
    public function getNom(): mixed
    {
        return $this->nom;
    }

    /**
     * @param mixed|string $nom
     */
    public function setNom(mixed $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed|string
     */
    public function getPrenom(): mixed
    {
        return $this->prenom;
    }

    /**
     * @param mixed|string $prenom
     */
    public function setPrenom(mixed $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return int|mixed
     */
    public function getAge(): mixed
    {
        return $this->age;
    }

    /**
     * @param int|mixed $age
     */
    public function setAge(mixed $age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed|string
     */
    public function getSection(): mixed
    {
        return $this->section;
    }

    /**
     * @param mixed|string $section
     */
    public function setSection(mixed $section): void
    {
        $this->section = $section;
    }

}
