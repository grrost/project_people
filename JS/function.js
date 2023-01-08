class PEDAGOG{

    constructor(){

    }

    showListPedagog(year){
        // вернуть весь список педагогов
        var arr = [];
        var i = 0;
        
        $.ajax({
            url:"/test/spiski/getListPedagog.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                year: year
            },
            success: function(data){

                $.each(data, function (index, value) {
                    arr[i] = value;
                    i++;
                });

            },
            error: function () {
                
            }
        })



        return arr;
    }
}

class GRUPPA{

    constructor(){

    }

    showGruppaInfo(year, gruppa){
        // показать информацию о группе
        let arr = {};
        $.ajax({
            url:"/test/spiski/showGruppaInfo.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                gruppa: gruppa,
                year: year
            },
            success: function(data){

                $.each(data, function (index, value) {
                    arr = value;
                });

            },
            error: function () {
                
            }
        })

        return arr;

    }

    showPeopleInGruppa(year, gruppa_id){
        // показать обучающихся в группе
        let arr2 = [];
        $.ajax({
            url:"/test/spiski/showPeopleInGruppa.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                gruppa_id: gruppa_id,
                year: year
            },
            success: function(data){
                let i = 0;
                $.each(data, function (index, value) {
                    arr2[i] = value;
                    i++;
                });

            },
            error: function () {
                
            }
        })

        return arr2;

    }

    showPedagogGrupp(year, pedagog_id){
        // показать группы педагога
        let arr = [];
        let i = 0;
        $.ajax({
            url:"/test/spiski/showPedagogGrupp.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                year: year,
                pedagog_id: pedagog_id
            },
            success: function(data){
                $.each(data, function(index, value){
                    arr[i] = value;
                    i++;
                })

            },
            error: function(){
    
            }
        })

        return arr;
    }

    showGrupps(id_people){
        // показать группы, в которые ходил обучающийся
        var arr = {}; 

        $.ajax({
            url:"/test/spiski/showGrupps.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                id_people: id_people
            },
            success: function(data){
                arr = data;
            }
        })
        return arr;

    }

    showGruppaInfoBar(id){
        var gr = new GRUPPA;
        $('#idModal3').html(gr.get_form2(id));
        $('#exampleModalLabel3').html('Изменить состояние');
        $('#exampleModalLabel3').closest('.modal-dialog').removeClass('modal-lg');
        $('#exampleModalLabel3').closest('.modal-dialog').addClass('modal-md');
        $('#imgModal3').replaceWith('<svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-people" fill="#32CD32" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/></svg>');
    }

    get_form2(id){ 
        let arr_g;

        $.ajax({
            url:"/test/spiski/getGruppaForm.php",
            method: "get",
            dataType: "html",
            async: false,
            data: {
                id_people: id
            },
            success: function(data){
                arr_g = data;
            }
        })
        return arr_g;
    }

    infoBar(people_id, gruppa_id, year){
        // показать группы, в которые ходил обучающийся
        var arr = {}; 

        $.ajax({
            url:"/test/spiski/getInfoBar.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                people_id: people_id,
                gruppa_id: gruppa_id,
                year: year
            },
            success: function(data){
                arr = data;
            }
        })
        return arr;

    }

    saveInfoBar(id, start, finish, year){
        // показать группы, в которые ходил обучающийся
        var arr = {}; 

        $.ajax({
            url:"/test/spiski/saveInfoBar.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                id: id,
                start: start,
                finish: finish,
                year: year
            },
            success: function(data){
                arr = data;
            }
        })
        return arr;

    }


}

class PEOPLE{

    constructor(){

    }

    showPeopleInfo(people_id){
        // показать инфо об обучающемся
        let arr = {};
        $.ajax({
            url:"/test/spiski/showPeopleInfo.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                people_id: people_id,
            },
            success: function(data){
                $.each(data, function (index, value) {
                    arr = value;                    
                });

            },
            error: function () {
                
            }
        })

        return arr;
    }

    showPedagogInfo(people_id){
        // показать инфо об обучающемся
        let arr = {};
        $.ajax({
            url:"/test/spiski/showPedagogInfo.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                pedagog_id: pedagog_id,
            },
            success: function(data){
                $.each(data, function (index, value) {
                    arr = value;                    
                });

            },
            error: function () {
                
            }
        })

        return arr;
    }

    showPeopleSerchList(people_name){
        // Поиск учеников по ФИО
        $.ajax({
            url:"/test/spiski/searchPeople.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                param: people_name,
            },
            success: function(data){
                $('#idModal').html(data);
            }
        })

        return arr;
    }

    setPeopleToGrupp(year, people_id, gruppa_id, pedagog_id){
        $.ajax({
            url:"/test/spiski/setPeopleToGrupp.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                people_id: people_id,
                gruppa_id: gruppa_id,
                pedagog_id: pedagog_id,
                year: year
            },
            success: function(data){
                toastr.options = {
                    positionClass: 'toast-bottom-right',
                };
                toastr.success('Успешно добавлено');
            }
        })
    }

    peopleInfoSave(){
        // сохранить данные с формы обучающегося
        var dataForma = {};
        $('#modalForm').find('input, select').each(function(){
            dataForma[this.id] = $(this).val();
        });
    
        $.ajax({
            url:"/test/spiski/savePeopleInfo.php",
            method: "get",
            dataType: "json",
            async: true,
            data: {
                data: dataForma
            },
            success: function(data){
                if (data.rezult == 'saved'){
                    toastr.options = {
                        positionClass: 'toast-bottom-right',
                    };
                    toastr.success('Успешно сохранено');
                }
            }
        })
    }

    set_Modal_Window_Info(people_id){
        // получаем форму в модальное окно
        let people = new PEOPLE;
        $.ajax({
            url:"/test/spiski/modalWindowForm.php",
            method: "get",
            dataType: "html",
            async: false,
            success: function(data){
                $('#idModal').html(data);
                $('#imgModal').attr("src", "/test/icons/person-circle.svg");
                $('#exampleModalLabel').html("Редактировать");
                $('#idModal').append('<div class="btn-group btn-group-sm" role="group" aria-label="Basic example"><button type="button" id="konkurs" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-html="true" data-content="">Конкурсы</button><button type="button" id="grupps" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-html="true" data-content="">Группы</button></div>');
                $(function(){
                    $('[data-toggle="popover"]').popover()
                });

                let konkurs = new KONKURS;
                let grupps = new GRUPPA;
                $('#konkurs').on("click", function(){
                    let str = '<div style="max-height:350px; overflow-y: scroll;">';
                    let konkStart = false;
                    let startYear = '';
                    $.each(konkurs.showKonkurs($('#people_id').val()), function(index, value){
                        if (index == 'error'){
                            str = '<ul class="list-group"><li class="list-group-item">Данных не найдено</li></ul>';
                        }else{
                            if (startYear == value.year) {}else{konkStart = false}
                            if (konkStart == false) {
                                str += '<ul class="list-group" style="font-size: 12px;"><li class="list-group-item active">'+value.year+'</li>';
                            }
                            str += '<li class="list-group-item"><b><a id="'+value.konkurs_id+'">'+value.konkurs_name+'</a></b>, '+value.konkurs_mesto+' место, '+value.ped_surname+'</li>';
                            startYear = value.year;
                            konkStart = true;
                        }
                    });

                    $('#konkurs').attr("data-content", str);

                });
                $('#grupps').on("click", function(){
                    let str2 = '<div style="max-height:350px; overflow-y: scroll;">';
                    let groupStart = false;
                    let startYear2 = '';
                    $.each(grupps.showGrupps($('#people_id').val()), function(index, value){
                        if (index == 'error'){
                            str2 = '<ul class="list-group"><li class="list-group-item">Данных не найдено</li></ul>';
                        }else{
                            if (startYear2 == value.year) {}else{groupStart = false}
                            if (groupStart == false) {
                                str2 += '<ul class="list-group" style="font-size: 12px;"><li class="list-group-item active">'+value.year+'</li>';
                            }
                            str2 += '<li class="list-group-item"><b>'+value.gruppa_name+'</b>, '+value.pedagog_surname+', '+value.year+'</li>';
                            startYear2 = value.year;
                            groupStart = true;
                        }

                    });

                    $('#grupps').attr("data-content", str2);
                });

                // сохранить данные об обучающемся
                $('#modalWindowSave').unbind();
                $('#modalWindowSave').on("click", function(){
                    people.peopleInfoSave();
                })
            }
        })
    
        $.each (people.showPeopleInfo(people_id), function(index, value){
            $('#'+index+'').val(value);
        });
    }

    peopleDelete(year, people_id, gruppa_id){
        // удаление обучающегося из группы
        if (confirm("Точно удалить?")){
            $.ajax({
            url:"/test/spiski/delPeopleInGrupp.php",
            method: "get",
            dataType: "html",
            async: false,
            data: {
                people_id : people_id,
                gruppa_id: gruppa_id,
                year : year
            },
            success: function(data){
                toastr.options = {
                    positionClass: 'toast-bottom-right',
                };
                toastr.success('Успешно удалено');
            }
        })
        }
    }

    add_new_people(){
        // сохранить данные с формы обучающегося
        var dataForma = {};
        $('#modalForm').find('input, select').each(function(){
            dataForma[this.id] = $(this).val();
        });
    
        $.ajax({
            url:"/test/spiski/addNewPeople.php",
            method: "get",
            dataType: "json",
            async: true,
            data: {
                data: dataForma
            },
            success: function(data){
                if (data.rezult == 'saved'){
                    toastr.options = {
                        positionClass: 'toast-bottom-right',
                    };
                    toastr.success('Успешно добавлено');
                }else{
                    toastr.options = {
                        positionClass: 'toast-bottom-right',
                    };
                    toastr.error('Ошибка добавления. Заполнены не все данные!');
                }
            }
        })
    }

    get_form(){
        let f;
        $.ajax({
            url:"/test/spiski/modalWindowForm.php",
            method: "get",
            dataType: "html",
            async: false,
            success: function(data){
                f = data;
            }
        })
    
        return f;
    }

    add_people(){
        var ppl = new PEOPLE;
        $('#idModal').html(ppl.get_form());
        $('#exampleModalLabel').html('Добавить обучающегося');
        $('#imgModal').replaceWith('<svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-people" fill="#32CD32" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/></svg>');
        $('#modalWindowSave').html('Добавить');
		$('#modalWindowSave').unbind();
        $('#modalWindowSave').on("click", function(){
            ppl.add_new_people();
        })
    }

}

class KONKURS{

    constructor(){

    }

    showKonkurs(id_people){
        // показать конкурсы у обучающегося
        var arr = {};
        $.ajax({
            url:"/test/spiski/showKonkurs.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                id_people: id_people
            },
            success: function(data){
                arr = data;
            }
        })
        return arr;
    }

}

class MODAL_WINDOW{
    constructor(){

    }

    clear() {
        // очищает модальное окно
        $('#imgModal').html("");
        $('#exampleModalLabel').html("");
        $('#idModalTop').html("");
        $('#idModal').html("");
        $('#idModalDop').html("");
    }

    clear2() {
        // очищает модальное окно
        $('#imgModal2').html("");
        $('#exampleModalLabel2').html("");
        $('#idModalTop2').html("");
        $('#idModal2').html("");
        $('#idModalDop2').html("");
    }

    buttonVisibleOff(obj){
        // скрывает кнопки
        $(obj).addClass("d-none");
    }

    alertInfo(message){
        $('#alert .alert-heading').html("<strong>"+message+"</strong>");
        $('#alert').fadeIn();
        setTimeout(function() {
            $('#alert').hide();
        }, 1500); 
    }

}

class FILES{
    constructor(){

    }

    showFilesList(direct){
        // показать список файлов
        var arr = {};
        $.ajax({
            url:"/test/files/showFilesList.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                direct: direct
            },
            success: function(data){
                arr = data;
            }
        })
        return arr;
    }

    fileDel(direct){
        var arr = {};
        $.ajax({
            url:"/test/files/delFile.php",
            method: "get",
            dataType: "json",
            async: false,
            data: {
                direct: direct
            },
            success: function(data){
                arr = data;
            }
        })
        return arr;
    }

    fileUpload(file, direct){
        var file_data = file.prop('files')[0];
        var form_data = new FormData();
        form_data.append('file_data', file_data);

        $.ajax({
            url: '/test/files/fileUpload.php?direct='+direct,
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            async: false,
        });
    }
}

class ZHURNAL{
    constructor(){

    }

    showZhurnal(ind, year){
        var arr = {};
        $.ajax({
            url:"/test/zhurnal/showZhurnal.php",
            method: "get",
            dataType: "json",
            async: false,
            data:{
                mount:ind,
                year: year
            },
            success: function(data){
                arr = data;
            }
        })
        return arr;
    }

    summPeople(gruppa_id, year){ 
        var arr = 0;
        $.ajax({
            url:"/test/zhurnal/summPeople.php",
            method: "get",
            dataType: "json",
            async: false,
            data:{
                gruppa_id: gruppa_id,
                year: year
            },
            success: function(data){
                arr = data.summ;
            }
        })
        return arr;
    }

    saveInfo(ind, val, zhurnal_id, year){
        $.ajax({
            url:"/test/zhurnal/saveZhurnal.php",
            method: "get",
            dataType: "json",
            async: false,
            data:{
                ind:ind,
                val: val,
                zhurnal_id: zhurnal_id,
                year: year
            },
            success: function(data){
                arr = data;
            }
        })
    }
}
