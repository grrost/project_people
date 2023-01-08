<?php

include_once '../function.php';
$gruppa = new PEOPLE;

if ($_GET['data']['people_name'] == '' || $_GET['data']['people_surname'] == '' || $_GET['data']['people_otchestvo'] == '' ){
    echo json_encode (["rezult" => "error"]);
    return;
}else{
    $zapros = $gruppa->update("INSERT INTO people (people_id, people_name, people_surname, people_otchestvo, people_data, people_pol, people_sertificat, sem_status_id, school_id, people_adress) VALUE (null, '".$_GET['data']['people_name']."', '".$_GET['data']['people_surname']."', '".$_GET['data']['people_otchestvo']."', '".$_GET['data']['people_data']."', '".$_GET['data']['people_pol']."', '".$_GET['data']['people_sertificat']."', '".$_GET['data']['sem_status_id']."', '".$_GET['data']['school_id']."', '".$_GET['data']['people_adress']."' ) ");
}

if(!$zapros){
    echo json_encode (["rezult" => "error"]);
}else{
    echo json_encode (["rezult" => "saved"]);
}

$gruppa->disconect();
?>
