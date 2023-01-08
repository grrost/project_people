<div class="table-responsive" style="max-height: 400px;overflow-y: scroll;">
    <table id="tabl1" class="table table-sm">
        <thead>
            <tr>
                <td scope="col"><b>#</td>
                <td scope="col"><b>Фамилия</td>
                <td scope="col"><b>Имя</td>
                <td scope="col"><b>Отчество</td>
                <td scope="col"><b>Дата</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php

            include_once '../function.php';
            $gruppa = new PEOPLE;

            $arr = explode('-', $_GET['year']);
            $prevYear = ($arr[0] - 1).'-'.($arr[1] - 1);
            $zapros = $gruppa->select("SELECT * FROM `".$prevYear."_uchenik` INNER JOIN `people` ON (`people`.people_id = `".$prevYear."_uchenik`.people_id) WHERE `pedagog_id` = '".$_GET['pedagog_id']."' ORDER BY `people_surname` ");

            $th=1;

            if ($zapros){
                foreach ( $zapros as $val ) {
                    echo '<tr><th scope="row">'.$th.'</th>';
                    echo '<td scope="col">'.$val['people_surname'].'</td><td scope="col">'.$val['people_name'].'</td><td scope="col">'.$val['people_otchestvo'].'</td><td scope="col">'.$val['people_data'].'</td>';

                    $rez = $gruppa->checkPeopleInGruppa($_GET['year'], $val['people_id'], $_GET['pedagog_id'], $_GET['gruppa_id']);
                    if (mysqli_num_rows($rez) != 0 ){
                        echo '<td class="text-center"><a id="'.$val["people_id"].'" class="peopleModal2" data-toggle="modal" data-target="#exampleModal"><img src="/test/icons/gear.svg" alt="" width="20" height="20" title="Редактировать"></a></td><td class="text-center"><button id="'.$val["people_id"].'" type="button" class="btn btn-success btn-sm" disabled ><img src="/test/icons/check-circle.svg" alt="" width="20" height="20" title="Добавлено"></button></td>';
                    }else{
                        echo '<td class="text-center"><a id="'.$val["people_id"].'" class="peopleModal2" data-toggle="modal" data-target="#exampleModal"><img src="/test/icons/gear.svg" alt="" width="20" height="20" title="Редактировать"></a></td><td class="text-center"><button id="'.$val["people_id"].'" type="button" class="btn btn-primary btn-sm peopleToInsert" ><img src="/test/icons/person-plus.svg" alt="" width="20" height="20" title="Добавить"></button></td>';
                    }                
                    echo "</tr>";
                    $th++;
                }
            }else{
                echo "Ошибка запроса, предыдущий год не содержит записей о данном педагоге";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
    $gruppa->disconect();
?>
