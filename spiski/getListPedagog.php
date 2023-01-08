<?php

include_once '../function.php';
$gruppa = new PEOPLE;

$zapros = $gruppa->select("SELECT `".$_GET['year']."_gruppa`.gruppa_id, `".$_GET['year']."_gruppa`.gruppa_name, `".$_GET['year']."_gruppa`.objed_id, `".$_GET['year']."_gruppa`.pedagog_id, `".$_GET['year']."_gruppa`.gruppa_time, `pedagog`.pedagog_id, `pedagog`.pedagog_name, `pedagog`.pedagog_surname, `pedagog`.pedagog_otchestvo  FROM `".$_GET['year']."_gruppa` INNER JOIN `pedagog` ON (`pedagog`.pedagog_id = `".$_GET['year']."_gruppa`.pedagog_id) GROUP BY `pedagog_surname`, `pedagog_name` ");

if ($zapros){
    foreach ( $zapros as $index => $value ) {
        $arr[] = $value;
    }
}else{
    echo "Ошибка запроса";
}

echo json_encode($arr);

$gruppa->disconect();
?>