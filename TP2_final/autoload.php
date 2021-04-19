<?php
function load($className){
    include_once "classes+pictures/$className.php";
}
spl_autoload_register('load');
