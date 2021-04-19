<?php
session_start();
unset($_SESSION['before']);
header('location:login.php');
