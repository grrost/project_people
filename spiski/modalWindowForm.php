<?php
include_once '../function.php';
$people = new PEOPLE; 
?>

<form id="modalForm" class="form-group">

    <input type="hidden" id="people_id">

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Фамилия:</span>
        </div>
        <input type="text" class="form-control" id="people_surname" aria-label="Фамилия" aria-describedby="inputGroup-sizing-sm">
    </div>

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Имя:</span>
        </div>
        <input type="text" class="form-control" id="people_name" aria-label="Имя" aria-describedby="inputGroup-sizing-sm">
    </div>

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Отчество:</span>
        </div>
        <input type="text" class="form-control" id="people_otchestvo" aria-label="Отчество" aria-describedby="inputGroup-sizing-sm">
    </div>

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Дата:</span>
        </div>
        <input type="text" class="form-control" id="people_data" aria-label="Дата" aria-describedby="inputGroup-sizing-sm">
    </div>

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Пол:</span>
        </div>
        <select class="form-control" id="people_pol" aria-label="Пол" aria-describedby="inputGroup-sizing-sm">
            <option value="Женский">Женский</option>
            <option value="Мужской">Мужской</option>
        </select>
    </div>

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Сертификат:</span>
        </div>
        <input type="text" class="form-control" id="people_sertificat" aria-label="Сертификат" aria-describedby="inputGroup-sizing-sm">
    </div>

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Семья:</span>
        </div>
        <select class="form-control" id="sem_status_id" aria-label="Семейный статус" aria-describedby="inputGroup-sizing-sm">
            <?php
                $rezult = $people->select("SELECT * FROM `sem_status`");
                foreach ($rezult as $index => $value){
                    if ( $value['sem_status_id'] == 10 ){
                        echo '<option selected value="'.$value['sem_status_id'].'">'.$value['sem_status_name'].'</option>';
                    }else{
                        echo '<option value="'.$value['sem_status_id'].'">'.$value['sem_status_name'].'</option>';
                    }
                }
            ?>
        </select>
    </div>

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Школа:</span>
        </div>
        <select class="form-control" id="school_id" aria-label="Школа" aria-describedby="inputGroup-sizing-sm">
            <?php
                $rezult = $people->select("SELECT * FROM `school`");
                foreach ($rezult as $index => $value){
                    if ( $value['school_id'] == 10 ){
                        echo '<option selected value="'.$value['school_id'].'">'.$value['school_name'].'</option>';
                    }else{
                        echo '<option value="'.$value['school_id'].'">'.$value['school_name'].'</option>';
                    }
                }
            ?>
        </select>
    </div>

    <div class="input-group input-group-sm mb-1 shadow-sm">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Адрес:</span>
        </div>
        <input type="text" class="form-control" id="people_adress" aria-label="Адрес" aria-describedby="inputGroup-sizing-sm">
    </div>

</form>