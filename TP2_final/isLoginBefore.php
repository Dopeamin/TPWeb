<?php
session_start();
if(!isset($_SESSION['before'])){
    header('location:login.php');
}