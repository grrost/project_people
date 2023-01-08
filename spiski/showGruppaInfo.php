<?php
include_once '../function.php';
$obj = new PEOPLE;

$zapros = $obj->select("SELECT * FROM `".$_GET['year']."_gruppa` INNER JOIN `objedinenie` ON (`objedinenie`.objed_id = `".$_GET['year']."_gruppa`.objed_id) INNER JOIN `pedagog` ON (`pedagog`.pedagog_id = `".$_GET['year']."_gruppa`.pedagog_id) WHERE `gruppa_id` = '".$_GET['gruppa']."' ");
foreach ($zapros as $val){
    $arr[] = $val;
}


$zapros = $obj->select("SELECT * FROM `".$_GET['year']."_uchenik` INNER JOIN `people` ON (`people`.people_id = `".$_GET['year']."_uchenik`.people_id) WHERE `gruppa_id` = '".$_GET['gruppa']."' ");
$mens = $womens = 0;
if ($zapros){
    foreach ($zapros as $val){
        if ($val["people_pol"] == "Мужской") $mens++;
        if ($val["people_pol"] == "Женский") $womens++;
    }
}

$arr[0]["mens"] = $mens;
$arr[0]["womens"] = $womens;


echo json_encode($arr);

?>