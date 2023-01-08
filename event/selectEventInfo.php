<?php 
include_once '../function.php';
$people = new PEOPLE;
$obj = new PEOPLE;
$th = 1;

if ( $_GET["year"] != '' ){
    $zapros = $people->select("SELECT * FROM `".$_GET['year']."_events` WHERE `event_id` = '".$_GET['event_id']."' ");
}

if ($zapros){

    $arr = [
        "event_id" => $zapros[0]["event_id"], 
        "event_name" => $zapros[0]["event_name"], 
        "event_uroven" => $zapros[0]["event_uroven"],
        "event_dateOT" => $zapros[0]["event_dateOT"], 
        "event_dateDO" => $zapros[0]["event_dateDO"],
        "event_link" => $zapros[0]["event_link"],
        "event_discription" => $zapros[0]["event_discription"],
        "event_age" => $zapros[0]["event_age"],
        "event_status" => $zapros[0]["event_status"]
    ];
}

echo json_encode($arr);

?>