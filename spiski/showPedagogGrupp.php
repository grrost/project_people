<?php

include_once '../function.php';
$gruppa = new PEOPLE;

$zapros = $gruppa->select("SELECT * FROM `".$_GET['year']."_gruppa` WHERE `pedagog_id` = '".$_GET['pedagog_id']."' ORDER BY `gruppa_name` ");

if ($zapros){
    foreach ( $zapros as $index => $value ) {
        $arr[] = $value;
    }
}else{
    echo "Ошибка запроса";
}

echo json_encode($arr);

$gruppa->disconect();
?>