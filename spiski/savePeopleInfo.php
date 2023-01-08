<?php

include_once '../function.php';
$gruppa = new PEOPLE;

$stroka = '';

foreach ($_GET['data'] as $index => $value){
    $stroka .= " `".$index."` = '".$value."',";
}

$stroka = substr($stroka,0,-1);

$zapros = $gruppa->update("UPDATE `people` SET ".$stroka." WHERE `people_id` = ".$_GET['data']['people_id']."");

if(!$zapros){
    echo json_encode (["rezult" => "error"]);
}else{
    echo json_encode (["rezult" => "saved"]);
}

$gruppa->disconect();
?>
