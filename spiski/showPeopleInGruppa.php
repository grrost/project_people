<?php
include_once '../function.php';
$obj = new PEOPLE;

$zapros = $obj->select("SELECT * FROM `".$_GET['year']."_uchenik` INNER JOIN `people` ON (`people`.people_id = `".$_GET['year']."_uchenik`.people_id) INNER JOIN `pedagog` ON (`pedagog`.pedagog_id = `".$_GET['year']."_uchenik`.pedagog_id) WHERE `gruppa_id` = '".$_GET['gruppa_id']."' ORDER BY `people_surname` ");
foreach ($zapros as $index => $value){
    $arr[] = $value;
}

echo json_encode($arr);
?>