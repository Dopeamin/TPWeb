<?php


class Personne
{
    private $userName;
    private $userEmail;
    private $userPassword;
    private $picture;
    private $age;

    /**
     * personne constructor.
     * @param $userName
     * @param $userEmail
     * @param $age
     * @param $userPassword
     * @param $picture
     */
    public function __construct($userName = '', $userEmail = '',$userPassword='', $age = 0,$picture = '')
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->age = $age;
        $this->userPassword = $userPassword;
        $this->picture = $picture;
    }


    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($name): void
    {
        $this->userName = $name;
    }
    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param mixed $userPassword
     */
    public function setUserPassword($name): void
    {
        $this->userName = $name;
    }
    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($firstname): void
    {
        $this->userEmail = $firstname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }
    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($age): void
    {
        $this->picture = $age;
    }

}
