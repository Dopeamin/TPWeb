<?php
 session_start();
 if(isset($_SESSION['visited'])){
     $_SESSION['visited']++;
     echo "c'est votre visite numero".$_SESSION['visited'];
     var_dump($_SESSION);

 }
 else{
     $_SESSION['visited']=1;
     echo "c'est votre 1ere visite";
 }
