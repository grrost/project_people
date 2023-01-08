<div class="table-responsive">
    <table class="table table-sm">
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
            $arr = explode(" ", $_GET["param"]);
            if (count($arr) == 1 ){
                $zapros = $gruppa->select("SELECT * FROM `people` WHERE `people_name` LIKE '%".$_GET["param"]."%' OR `people_surname` LIKE '%".$_GET["param"]."%' OR `people_otchestvo` LIKE '%".$_GET["param"]."%' ORDER BY `people_surname` ");
            }elseif(count($arr) == 2 ){
                $zapros = $gruppa->select("SELECT * FROM `people` WHERE `people_name` LIKE '%".$arr[1]."%' AND `people_surname` LIKE '%".$arr[0]."%' OR `people_name` LIKE '%".$arr[0]."%' AND `people_surname` LIKE '%".$arr[1]."%' OR `people_name` LIKE '%".$arr[0]."%' AND `people_otchestvo` LIKE '%".$arr[1]."%' ORDER BY `people_surname` ");
            }elseif(count($arr) == 3 ){
                $zapros = $gruppa->select("SELECT * FROM `people` WHERE `people_name` LIKE '%".$arr[1]."%' AND `people_surname` LIKE '%".$arr[0]."%' AND `people_otchestvo` LIKE '%".$arr[2]."%' ORDER BY `people_surname` ");
            }
            
            $th=1;
            if ($zapros){
                foreach ( $zapros as $val ) {
                    echo '<tr><th scope="row">'.$th.'</th>';
                    echo '<td scope="col">'.$val['people_surname'].'</td><td scope="col">'.$val['people_name'].'</td><td scope="col">'.$val['people_otchestvo'].'</td><td scope="col">'.$val['people_data'].'</td>';

                    $rez = $gruppa->checkPeopleInGruppa($_GET['year'], $val['people_id'], $_GET['pedagog_id'], $_GET['gruppa_id']);

                    if (mysqli_num_rows($rez) != 0 ){
                        echo '<td class="text-center"><a id="'.$val["people_id"].'" class="peopleModal2" data-toggle="modal" data-target="#exampleModal"><img src="/test/icons/gear.svg" alt="" width="20" height="20" title="Редактировать"></a></td><td class="text-center"><button id="'.$val["people_id"].'" type="button" class="btn btn-success btn-sm" disabled="disabled" ><img src="/test/icons/check-circle.svg" alt="" width="20" height="20" title="Добавлено"></button></td>';
                    }else{
                        echo '<td class="text-center"><a id="'.$val["people_id"].'" class="peopleModal2" data-toggle="modal" data-target="#exampleModal"><img src="/test/icons/gear.svg" alt="" width="20" height="20" title="Редактировать"></a></td><td class="text-center"><button id="'.$val["people_id"].'" type="button" class="btn btn-primary btn-sm peopleToInsert" ><img src="/test/icons/person-plus.svg" alt="" width="20" height="20" title="Добавить"></button></td>';
                    }
                    echo "</tr>";
                    $th++;
                }
            }else{
                //echo "Ошибка запроса: данных не найдено";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
    $gruppa->disconect();
?>