<?php
session_start();
include_once "autoload.php";
$log = new LogWriter("Logged out of his account",$_SESSION['user']);
$log->writeLog();
unset($_SESSION['user']);
header('location:login.php');