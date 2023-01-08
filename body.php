                    <div class="row text-center">
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center float-right">
                                <img id="card-image" class="" src="/test/icons/people.svg" width="50" height="50" alt="Card image cap">&#160;&#160;<h1>Списки обучающихся</h1>
                            </div>
                        </div>
                    </div>
                        
                        <input type="hidden" id="id_gruppa">
                        <input type="hidden" id="id_pedagog">
                        
                        <div class="row text-left">
                            <div class="col-lg-12">
                                <div class="form-group left-block form-inline input-group-sm float-right" style="display: inline-block">
                                    <select class="form-control" id="Pedagog" style="min-width: 200px">
                                        <option selected disabled>Выберите педагога</option>
                                    </select>

                                    <select disabled class="form-control" id="Gruppa" style="min-width: 200px">
                                        <option selected disabled>Выберите группу</option>
                                    </select>

                                    <button id="btn_select" type="button" class="btn btn-sm btn-primary">Выбрать</button>
                                </div>
                            </div>
                        </div>

                        <div class="row text-left">
                        
                            <div id="mainWindow" class="col-lg-12">
                            </div>

                        </div>
                        
                
                        <div class="row text-left">
                            <div class="col-lg-12">
                                <button id="people_add" class="btn btn-sm icon-btn btn-success d-none" data-toggle="modal" data-target="#exampleModal2"><img src="/test/icons/person-plus.svg" alt="" width="24" height="24" title="добавить">  добавить</button>
                                <button id="people_perevod" class="btn btn-sm icon-btn btn-info d-none" data-toggle="modal" data-target="#exampleModal2"><img src="/test/icons/people.svg" alt="" width="24" height="24" title="перевести">  перевести</button>
                            </div>
                        </div>

                </div>
            </div>
        </div>

    </div>
 </div>


<script>
    
let pedagog = new PEDAGOG;
let gruppa = new GRUPPA;
let people = new PEOPLE;
let modalWindow = new MODAL_WINDOW;


showPedagogList();

$('#people_add').on("click", function(){
    // поиск и добавление обучающегося в группу
    modalWindow.clear2();
    $('#exampleModalLabel2').html("Поиск");
    $('#imgModal2').attr("src", "/test/icons/person-circle.svg");
    // загружает форму поиска
    loadSearchInput();
    $('#search').on("click", function(){
        if ($.trim($('#searchInput').val()) == '') {
            toastr.options = {
                positionClass: 'toast-bottom-right',
            };
            toastr.error('Пустой запрос');
            return;
        }
        showPeopleSerchList($('#searchInput').val(), $('#selectGod').val(), $('#Gruppa').val(), $('#Pedagog').val());
        $('.peopleModal2').on("click", function(){
            // добавить инфо в модальное окно 1
            modalWindow.clear();
            people.set_Modal_Window_Info($(this).attr('id'));
        });
        $('.peopleToInsert').unbind();
        $('.peopleToInsert').on("click", function(){
            // добавляет обучающегося в группу
            people.setPeopleToGrupp($('#selectGod').val(), $(this).attr('id'), $('#Gruppa').val(), $('#Pedagog').val());
            $(this).attr("disabled", "disabled");
            $(this).removeClass("btn-primary");
            $(this).addClass("btn-success");
            $(this).html('<img src="/test/icons/check-circle.svg" alt="" width="20" height="20" title="Добавлено">');
            showPeopleList();
        })
    });
});
$('#people_perevod').on("click", function(){
    // перевод обучающегося в группу
    modalWindow.clear2();
    $('#exampleModalLabel2').html("Перевод с предыдущего года");
    $('#imgModal2').attr("src", "/test/icons/person-circle.svg");
    // загружает форму поиска
    showPeoplePerevodList($('#selectGod').val(), $('#Gruppa').val(), $('#Pedagog').val());
    $('.peopleModal2').on("click", function(){
        // добавить инфо в модальное окно 1
        modalWindow.clear();
        people.set_Modal_Window_Info($(this).attr('id'));
    });
    $('.peopleToInsert').unbind();
    $('.peopleToInsert').on("click", function(){
        // добавляет обучающегося в группу
        people.setPeopleToGrupp($('#selectGod').val(), $(this).attr('id'), $('#Gruppa').val(), $('#Pedagog').val());
        $(this).attr("disabled", "disabled");
        $(this).removeClass("btn-primary");
        $(this).addClass("btn-success");
        $(this).html('<img src="/test/icons/check-circle.svg" alt="" width="20" height="20" title="Добавлено">');
        showPeopleList();
    })
})


let nowYear = "2022-2023";

$('#btn_select').click(showPeopleList);
$('#Pedagog').change(showPedagogGrupp);
// отключить кнопку сохранить в модальном окне 2
modalWindow.buttonVisibleOff('#modalWindowSave2');

$('#selectGod').change(function(){
    // обновляет списки при смене года
    $('#mainWindow').html(""); 
    showPedagogList();
    $('#Gruppa').html("<option selected disabled>Выберите группу</option>");
    $('#people_add').addClass("d-none");
    $('#people_perevod').addClass("d-none");
    $('#Gruppa').attr("disabled", "disabled");
});

function showPedagogList(){
    // показывает список педагогов
    $('#Pedagog').html("<option disabled selected>Выберите</option>");
    $.each(pedagog.showListPedagog($('#selectGod').val()), function(index, value){
        $('#Pedagog').append('<option value="'+value.pedagog_id+'">'+value.pedagog_surname+' '+value.pedagog_name+' '+value.pedagog_otchestvo+'</option>')
    })
}

function showPedagogGrupp(){
    // показывает список групп у педагога
    $('#Gruppa').removeAttr('disabled');
    $('#Gruppa').html("");
    $.each(gruppa.showPedagogGrupp($('#selectGod').val(), $('#Pedagog').val()), function(index, value){
        $('#Gruppa').append('<option value="'+value.gruppa_id+'">'+value.gruppa_name+'</option>')
    })
}

function showPeopleList(){
    // Показывает список обучающихся из группы
    if ($('#Pedagog').val() != null){
        $('#mainWindow').html("");
        let rezult;
        if ($('#Gruppa option:selected').attr('id') != 'none'){
            rezult = gruppa.showPeopleInGruppa($('#selectGod').val(), $('#Gruppa').val());
        }else{
            rezult = gruppa.showPeopleInGruppa($('#selectGod').val(), '%%');
        }
        if ($.isEmptyObject(rezult)){
            $('#mainWindow').html("<h3>Записей не найдено/Группа пустая</h3>")
        }else{
            $('#mainWindow').html("<div class='table-responsive' style='overflow-y:auto; height:72vh;'><table id='tab1' class='table table-sm'><thead><tr class='sticky-top bg-white shadow-sm'><td scope='col' class='th-sm'><b>#</td><td scope='col' class='th-sm'><b>Фамилия</td><td scope='col' class='th-sm'><b>Имя</td><td scope='col' class='th-sm'><b>Отчество</td><td scope='col' class='th-sm'><b>Дата</td><td scope='col' class='th-sm'><b>Сертификат</td><td></td><td></td><td></td></tr></thead><tbody id='tbody'>");
            var nDate = new Date();
            nowDate = nDate.getFullYear()+'-'+('0'+(nDate.getMonth()+1)).slice(-2)+'-'+('0'+nDate.getDate()).slice(-2);
            let people_old = '';
            let index_now = 1;
            let index_old = 1;
            $.each(rezult, function(index, value){
                if (value.data_finish < nowDate){
                    people_old += "<tr class='hov text-black-50' ><th scope='row'>" + index_now + "</th><td>"+value.people_surname+"</td><td>"+value.people_name +"</td><td>"+value.people_otchestvo+"</td><td>" + value.people_data + "</td><td>" + value.people_sertificat + "</td><td><a id='"+value.people_id+"' type='button' class='peopleInfo' data-toggle='modal' data-target='#exampleModal'><img src='/test/icons/gear.svg' alt='' width='20' height='20' title='Просмотреть'></a></td><td><a id='"+value.people_id+"' type='button' class='gruppaInfoBar' data-toggle='modal' data-target='#exampleModal3'><img src='/test/icons/clock.svg' alt='' width='20' height='20' title='Информация о группе'></a></td><td><a type='button' id='"+value.people_id+"' class='peopleDelete'><img src='/test/icons/trash.svg' alt='' width='20' height='20' title='Удалить'></a></td></tr>";
                    index_now++;
                }else{
                    $('#tbody').append("<tr class='hov'><th scope='row'>" + index_old + "</th><td>"+value.people_surname+"</td><td>"+value.people_name +"</td><td>"+value.people_otchestvo+"</td><td>" + value.people_data + "</td><td>" + value.people_sertificat + "</td><td><a id='"+value.people_id+"' type='button' class='peopleInfo' data-toggle='modal' data-target='#exampleModal'><img src='/test/icons/gear.svg' alt='' width='20' height='20' title='Просмотреть'></a></td><td><a id='"+value.people_id+"' type='button' class='gruppaInfoBar' data-toggle='modal' data-target='#exampleModal3'><img src='/test/icons/clock.svg' alt='' width='20' height='20' title='Информация о группе'></a></td><td><a type='button' id='"+value.people_id+"' class='peopleDelete'><img src='/test/icons/trash.svg' alt='' width='20' height='20' title='Удалить'></a></td></tr>");
                    index_old++;
                }
                $('#people_add').removeClass('d-none');
            });
            $('#tbody').append(people_old);
            $('#mainWindow').append("");
        }


        //if ($('#selectGod').val() == nowYear){
            $('#people_add').removeClass('d-none');
            $('#people_perevod').removeClass('d-none');
        //}
    }else{
        toastr.options = {
                positionClass: 'toast-bottom-right',
            };
        toastr.error('Педагог не выбран');
    }

    // событие на кнопку. инфо об обучающемся
    $('.peopleInfo').on("click", function(){
        $('#exampleModal .modal-dialog').removeClass("modal-lg");
        modalWindow.clear();
        people.set_Modal_Window_Info($(this).attr('id'));
    })

    // информация о группе
    $('.gruppaInfoBar').on("click", function(){
        $('#idModal3').html(gruppa.showGruppaInfoBar($(this).attr('id')));
        $.each(gruppa.infoBar( $(this).attr('id'), $('#Gruppa').val(), $('#selectGod').val() ), function(index, value){
            $('#'+index).val(value);
        })
        $('#modalWindowSave3').unbind();
        $('#modalWindowSave3').on("click", function(){
            saveInfoBar($('#id').val(), $('#data_start').val(), $('#data_finish').val(), $('#selectGod').val());
        })
    })

    function saveInfoBar(id, start, finish, year){
        if (gruppa.saveInfoBar(id, start, finish, year).rezult == 'saved' ){
            var mess = new MODAL_WINDOW;
            //mess.alertInfo("Успешно сохранено");
            toastr.options = {
                positionClass: 'toast-bottom-right',
            };
            toastr.success('Успешно сохранено');
            showPeopleList();
        };
    }

    // событие на кнопку. удалить обучающегося
    $('.peopleDelete').on("click", function(){
        people.peopleDelete($('#selectGod').val(), $(this).attr('id'), $('#Gruppa').val());
        showPeopleList();
    })

    /*$('#tab1').DataTable({stateSave: true});*/
}

function loadSearchInput(){
    // загружает поисковую форму
    $.ajax({
        url:"/test/spiski/searchInput.php",
        method: "get",
        dataType: "html",
        async: false,
        success: function(data){
            $('#idModal2').html(data);
        }
    })
}

function showPeopleSerchList(people_search, year, gruppa_id, pedagog_id){
    // показывает результаты поиска
    $.ajax({
        url:"/test/spiski/searchPeople.php",
        method: "get",
        dataType: "html",
        async: false,
        data:{
            param: people_search,
            year: year,
            gruppa_id: gruppa_id,
            pedagog_id: pedagog_id
        },
        success: function(data){
            $('#idModalDop2').html(data);
        }
    })
}

function showPeoplePerevodList(year, gruppa_id, pedagog_id){
    $.ajax({
        url:"/test/spiski/perevodPeople.php",
        method: "get",
        dataType: "html",
        async: false,
        data:{
            year: year,
            gruppa_id: gruppa_id,
            pedagog_id: pedagog_id
        },
        success: function(data){
            $('#idModalDop2').html(data);
        }
    })

}

</script>
