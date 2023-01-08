<?php

include_once 'function.php';
$obj = new PEOPLE;
$zapros = $obj->select($_POST['zapros']);

if ( !$zapros ) {
    return "Ошибка запроса";
}else{

    $arr = explode(",", $_POST['fieldsName']);

    $i = 0;
    foreach($zapros as $val1){
        foreach($val1 as $key2 => $val2){
            echo '<form class="form-horizontal">';
            echo '  <div class="form-group" style="margin-bottom: 2px">
                        <label class="control-label col-xs-3" for="'.$key2.'">'.$arr[$i].':</label>
                        <div class="col-xs-9" style="margin: 0px">
                            <input type="text" class="form-control" id="'.$key2.'" value="'.$val2.'">
                        </div>
                    </div>';
            $i++;
        }
    }
}

?>