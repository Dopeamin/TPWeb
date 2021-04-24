<?php

function isauthentified ($email , $mdp): bool
{
    $bd = BDuser::getInstance();

    $req="select * from user";
    $reponse =$bd-> query($req);

    $pers = $reponse->fetchAll(PDO::FETCH_OBJ );
    foreach($pers as $personne ){
        if( $personne->email =="$email" && $personne->mdp==$mdp ) return true;
    }
    return false;
}
