<?php

class ConnexionBD
{
    private static $_dbname = "tp";
    private static $_user = "root";
    private static $_pwd = "";
    private static $_host = "localhost";
    private static $_bdd = null;

    private function __construct()
    {
        try {
            $db = parse_url(getenv("DATABASE_URL"));

            self::$_bdd = new PDO("pgsql:" . sprintf(
                    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                    $db["host"],
                    $db["port"],
                    $db["user"],
                    $db["pass"],
                    ltrim($db["path"], "/")
                ));
            //self::$_bdd= new PDO("mysql:host=" . self::$_host . ";dbname=" . self::$_dbname , self::$_user, self::$_pwd);
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
