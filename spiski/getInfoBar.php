<?php
include_once '../function.php';
$obj = new PEOPLE;

$zapros = $obj->select("SELECT * FROM `".$_GET['year']."_uchenik` INNER JOIN `".$_GET['year']."_gruppa` ON (`".$_GET['year']."_gruppa`.gruppa_id = `".$_GET['year']."_uchenik`.gruppa_id) WHERE `".$_GET['year']."_uchenik`.people_id = '".$_GET['people_id']."' AND `".$_GET['year']."_uchenik`.gruppa_id = '".$_GET['gruppa_id']."' ");
foreach ($zapros as $index => $value){
    $arr = $value;
}

echo json_encode($arr);
?>