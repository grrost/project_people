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

<?php
echo '<input id="pedID" forn="'.$this->userName.'" class="d-none" value="'.$this->userId.'">';
?>
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


let nowYear = "2021-2022";

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
    $('#Pedagog').append('<option value="'+$('#pedID').val()+'">'+$('#pedID').attr('forn')+'</option>');
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
            $('#mainWindow').html("<table class='table table-sm'><thead><tr><td scope='col' class='th-sm'><b>#</td><td scope='col' class='th-sm'><b>Фамилия</td><td scope='col' class='th-sm'><b>Имя</td><td scope='col' class='th-sm'><b>Отчество</td><td scope='col' class='th-sm'><b>Дата</td><td scope='col' class='th-sm'><b>Сертификат</td><td></td><td></td></tr></thead><tbody id='tbody'>");
            $.each(rezult, function(index, value){

                // перевод и зачисление для педагогов на текущий год ОТКЛЮЧЕНЫ
                if ($('#selectGod').val() == nowYear){
                    if (value.people_surname == '' || value.people_name == '' || value.people_otchestvo == '' || value.people_adress == '' || value.people_data == '' || value.people_pol == '' || value.people_sertificat == '' || value.school_id == 10 || value.sem_status_id == 10) {
                        $('#tbody').append("<tr class='hov'><th scope='row' class='text-warning'>" + (index+1) + "!</th><td>"+value.people_surname+"</td><td>"+value.people_name +"</td><td>"+value.people_otchestvo+"</td><td>" + value.people_data + "</td><td>" + value.people_sertificat + "</td><td><a id='"+value.people_id+"' type='button' class='peopleInfo' data-toggle='modal' data-target='#exampleModal'><img src='/test/icons/eye.svg' alt='' width='20' height='20' title='Просмотреть'></a></td><td><a type='button' id='"+value.people_id+"' class='peopleDelete'><img src='/test/icons/trash.svg' alt='' width='20' height='20' title='Удалить'></a></td></tr>"); 
                    }else{
                        $('#tbody').append("<tr class='hov'><th scope='row'>" + (index+1) + "</th><td>"+value.people_surname+"</td><td>"+value.people_name +"</td><td>"+value.people_otchestvo+"</td><td>" + value.people_data + "</td><td>" + value.people_sertificat + "</td><td><a id='"+value.people_id+"' type='button' class='peopleInfo' data-toggle='modal' data-target='#exampleModal'><img src='/test/icons/eye.svg' alt='' width='20' height='20' title='Просмотреть'></a></td><td><a type='button' id='"+value.people_id+"' class='peopleDelete'><img src='/test/icons/trash.svg' alt='' width='20' height='20' title='Удалить'></a></td></tr>");
                    }
                    $('#people_add').removeClass('d-none');
                }else{
                    $('#tbody').append("<tr class='hov'><th scope='row'>" + (index+1) + "</th><td>"+value.people_surname+"</td><td>"+value.people_name +"</td><td>"+value.people_otchestvo+"</td><td>" + value.people_data + "</td><td>" + value.people_sertificat + "</td><td><a id='"+value.people_id+"' type='button' class='peopleInfo' data-toggle='modal' data-target='#exampleModal'><img src='/test/icons/eye.svg' alt='' width='20' height='20' title='Просмотреть'></a></td><td></td></tr>");
                }
            });
        }

        // перевод и зачисление для педагогов на текущий год ОТКЛЮЧЕНЫ
        if ($('#selectGod').val() == nowYear){
            $('#people_add').removeClass('d-none');
            $('#people_perevod').removeClass('d-none');
        }
    }else{
        alert("Педагог не выбран");
    }

    // событие на кнопку. инфо об обучающемся
    $('.peopleInfo').on("click", function(){
        $('#exampleModal .modal-dialog').removeClass("modal-lg");
        modalWindow.clear();
        people.set_Modal_Window_Info($(this).attr('id'));
    })

    // событие на кнопку. удалить обучающегося
    $('.peopleDelete').on("click", function(){
        people.peopleDelete($('#selectGod').val(), $(this).attr('id'), $('#Gruppa').val());
        showPeopleList();
    })
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


// чтобы скролилось первое модальное окно, после закрытия второго
$('body').on('hidden.bs.modal', function () {
    if ($('.modal.show').length > 0) {
        $('body').addClass('modal-open');
    }
});

</script>