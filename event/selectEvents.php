<?php 
include_once '../function.php';
$people = new PEOPLE;
$obj = new PEOPLE;
$th = 1;

if ( $_GET["year"] != '' ){
    $zapros = $people->select("SELECT * FROM `".$_GET['year']."_events` ORDER BY `event_dateDO` ");
}

if ($zapros){
    $i = 1;
    foreach ($zapros as $value){
        $arr[$i] = [
            "event_id" => $value["event_id"], 
            "event_name" => $value["event_name"], 
            "event_uroven" => $value["event_uroven"], 
            "event_dateOT" => $value["event_dateOT"], 
            "event_dateDO" => $value["event_dateDO"],
            "event_status" => $value["event_status"]
        ];
        $i++;
    }
}

echo json_encode($arr);

?>