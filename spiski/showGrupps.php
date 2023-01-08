<?php
include_once '../function.php';
$obj = new PEOPLE;

$nowYear = date("Y");

for ($i = 2016; $i<=($nowYear); $i++){
    $zapros = $obj->select("SELECT *, `".$i.'-'.($i+1).'_gruppa'."`.gruppa_name as `gruppa_name` FROM `".$i.'-'.($i+1).'_uchenik'."` INNER JOIN `".$i.'-'.($i+1).'_gruppa'."` ON (`".$i.'-'.($i+1).'_uchenik'."`.gruppa_id = `".$i.'-'.($i+1).'_gruppa'."`.gruppa_id) INNER JOIN `pedagog` ON (`pedagog`.pedagog_id = `".$i.'-'.($i+1).'_gruppa'."`.pedagog_id) WHERE `people_id` = '".$_GET['id_people']."' ");
    if ($zapros){
        foreach ($zapros as $index => $value){
            $arr[] = ["gruppa_id" => $value['gruppa_id'], "gruppa_name" => $value['gruppa_name'], "year" => $i.'-'.($i+1), "pedagog_id" => $value['pedagog_id'], "pedagog_surname" => $value['pedagog_surname'].' '.$value['pedagog_name'].' '.$value['pedagog_otchestvo']];
        }
    }
}

if (isset($arr)){
    echo json_encode($arr);
}else{
    echo json_encode( ['error' => 'error'] );
}


$obj->disconect();
?>
