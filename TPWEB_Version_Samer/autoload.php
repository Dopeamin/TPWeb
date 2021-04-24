<?php

function load($className){
    include_once "class/$className.php";
}

spl_autoload_register('load');