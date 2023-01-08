<?php

include_once '../function.php';
$gruppa = new PEOPLE;

$zapros = $gruppa->update("UPDATE `".$_GET['year']."_uchenik` SET `data_start` = '".$_GET['start']."', `data_finish` = '".$_GET['finish']."' WHERE `id` = ".$_GET['id']." ");

if(!$zapros){
    echo json_encode (["rezult" => "error"]);
}else{
    echo json_encode (["rezult" => "saved"]);
}

$gruppa->disconect();

?>