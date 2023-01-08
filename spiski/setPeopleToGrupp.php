<?php

include_once '../function.php';
$gruppa = new PEOPLE;
$data_start = explode('-', $_GET['year']);
$zapros = $gruppa->insert("INSERT INTO `".$_GET['year']."_uchenik` (`id`, `people_id`, `gruppa_id`, `pedagog_id`, `data_start`, `data_finish`) VALUES (null, '".$_GET['people_id']."', '".$_GET['gruppa_id']."', '".$_GET['pedagog_id']."', '".$data_start[0]."-".date('m')."-".date('d')."', '".$data_start[1]."-05-31') ");
$gruppa->disconect();

if ($zapros){
    echo json_encode (["rezult" => "true"]);
}else{
    echo json_encode (["rezult" => "false"]);
}
?>