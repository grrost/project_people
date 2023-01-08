<?php
include_once '../function.php';
$obj = new PEOPLE;

$zapros = $obj->select("SELECT * FROM `people` INNER JOIN `sem_status` ON (`sem_status`.sem_status_id = `people`.sem_status_id) INNER JOIN `school` ON (`school`.school_id = `people`.school_id) WHERE `people_id` = '".$_GET['people_id']."' ");
foreach ($zapros as $index => $value){
    $arr[] = $value;
}

echo json_encode($arr);
?>