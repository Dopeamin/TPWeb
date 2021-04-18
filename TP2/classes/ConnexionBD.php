<?php

class ConnexionBD
{
    private static $_dbname = "d5jl2g8dpnp7k4";
    private static $_user = "rnkdfhgeadccoj";
    private static $_pwd = "c4765432d93ba09c9cb0073b511371a5aa0b11c47576ab0d3310ec449d7f6981";
    private static $_host = "ec2-63-34-97-163.eu-west-1.compute.amazonaws.com";
    private static $_bdd = null;

    private function __construct()
    {
        try {
            self::$_bdd = new PDO("pgsql:host=" . self::$_host . ";port=5432;dbname=" . self::$_dbname , self::$_user, self::$_pwd);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$_bdd) {
            new ConnexionBD();
        }
        return (self::$_bdd);
    }
}
