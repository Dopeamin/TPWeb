<?php
session_start();

if (isset($_SESSION['nbre'])) {
    $_SESSION['nbre']++;
    echo "Bienvenu merci votre fidélité c'est votre ${_SESSION['nbre']} visites";
} else {
    $_SESSION['nbre']= 1;
    echo "Bienvenu merci c'est votre première visite";
}
