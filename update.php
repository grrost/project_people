<?php

include_once 'function.php';
$obj = new PEOPLE;
$zapros = $obj->update("UPDATE `".$_POST['table']."` SET ".$_POST['set']." WHERE ".$_POST['where']." ");

if ( !$zapros ) {
    return "Ошибка запроса";
}

?>