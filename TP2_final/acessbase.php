<?php
include_once 'classes/ConnexionBD.php';
$bdd = ConnexionBD::getInstance();
$GLOBALS['a'] =$bdd;