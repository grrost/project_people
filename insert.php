<?php

include_once 'function.php';
$obj = new PEOPLE;
$zapros = $obj->insert("INSERT INTO `".$_POST['table']."` (".$_POST['fields'].") VALUES (".$_POST['values'].") ");

if ( !$zapros ) {
    return "Ошибка запроса";
}

?>