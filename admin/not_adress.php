<?php
include_once '../function.php';
$people = new PEOPLE;
$rez = $people->select("SELECT * FROM `".$_GET['year']."_uchenik` INNER JOIN `people` ON (`".$_GET['year']."_uchenik`.people_id = `people`.people_id) INNER JOIN `".$_GET['year']."_gruppa` ON (`".$_GET['year']."_uchenik`.gruppa_id = `".$_GET['year']."_gruppa`.gruppa_id) WHERE `people`.people_adress = '' GROUP BY `people`.people_id ORDER BY `people`.people_surname ");
echo json_encode ($rez);
?>