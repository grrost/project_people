<?php

include_once '../function.php';
$gruppa = new PEOPLE;
$zapros = $gruppa->delete("DELETE FROM `".$_GET['year']."_uchenik` WHERE `people_id` = '".$_GET['people_id']."' AND `gruppa_id` = '".$_GET['gruppa_id']."' ");

$gruppa->disconect();

if ($zapros){
    echo json_encode(["rezult" => "true"]);
}else{
    echo json_encode(["rezult" => "false"]);
}
?>