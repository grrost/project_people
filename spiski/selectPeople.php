<table id="example" class="table table-sm">
    <thead>
        <tr>
            <td scope="col"><b>#</td>
            <?php
                foreach ($_POST["tableFields"] as $val3){
                    echo '<td scope="col" class="th-sm"><b>'.$val3.'</td>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
    <?php 
        include_once '../function.php';
        $people = new PEOPLE;
        $th = 1;

        if ( $_POST["param"] != '' ){
            $zapros = $people->select($_POST["param"]);
        }

        //print_r ($_POST);
        //print_r ($zapros);
        
        if ($zapros){
            foreach ( $zapros as $val ) {
                echo '<tr class="hov"><th scope="row" onclick="marker(this);">'.$th.'</th>';
                foreach ( $val as $key => $val2 ){
                    if ($key == "id_people"){}else{echo '<td scope="col">'.$val2.'</td>';}
                }
                echo '<td class="text-center"><a id="'.$val["id_people"].'" class="peopleModal" data-toggle="modal" data-target="#exampleModal"><img src="/test/icons/gear.svg" alt="" width="20" height="20" title="Найстройки"></a> <a class="peopleDel"><img src="/test/icons/trash-fill.svg" alt="" width="20" height="20" title="Удалить"></a></td>';
                echo "</tr>";
                $th++;
            }
        }else{
            //echo "Ошибка запроса: данных не найдено";
        }

    ?>
    </tbody>
</table>

<?php
    $people->disconect();
?>