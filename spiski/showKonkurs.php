<?php
include_once '../function.php';
$obj = new PEOPLE;

$nowYear = date("Y")+1;

for ($i = 2016; $i<($nowYear); $i++){
    $zapros = $obj->select("SELECT *, `".$i.'-'.($i+1).'_konkurs'."`.konkurs_name FROM `".$i.'-'.($i+1).'_konkurs'."` INNER JOIN `napravlennost` ON (`".$i.'-'.($i+1).'_konkurs'."`.napravl_id = `napravlennost`.napravl_id) INNER JOIN `pedagog` ON (`pedagog`.pedagog_id = `".$i.'-'.($i+1).'_konkurs'."`.pedagog_id) ");
    if ($zapros){
        foreach ($zapros as $index => $value){
            $kon = unserialize($value['people_id']);
            foreach ($kon as $val){
                if ($_GET['id_people'] == $val){
                    $arr[] = [
                        "konkurs_id" => $value['konkurs_id'], 
                        "konkurs_name" => $value['konkurs_name'], 
                        "year" => $i.'-'.($i+1), 
                        "konkurs_mesto" => $value['konkurs_mesto'], 
                        "ped_surname" => $value['pedagog_surname'].' '.$value['pedagog_name'].' '.$value['pedagog_otchestvo'], 
                        "konkurs_date" => $value['konkurs_data']
                    ];
                }
            }
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
