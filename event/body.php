<div class="row text-center sticky-top">
    <div class="col-lg-12">
        <div id="inn" class="d-flex align-items-center float-right bg-light">
            <img src="/test/icons/calendar2-date.svg" width="50" height="50" alt="Card image cap">&#160;&#160;<h1>Мероприятия</h1>
        </div>
    </div>
</div>

<div class="row text-center">
    <div id="mainFrame" class="col-lg-12">
    </div>
</div>

<div class="row text-left">
    <div class="col-lg-12">
        <button id="addEvent" class="btn btn-sm btn-primary d-none" data-toggle="modal" data-target="#exampleModal">Добавить</button>
    </div>
</div>

<script>
$(window).scroll(function() {
    let aa = $('#inn').offset().top;
    if (aa > 50){
        $('#inn').html('<img src="/test/icons/calendar2-date.svg" width="25" height="25" alt="Card image cap">&#160;&#160;<h4>Мероприятия</h4>');
    }else{
        $('#inn').html('<img src="/test/icons/calendar2-date.svg" width="50" height="50" alt="Card image cap">&#160;&#160;<h1>Мероприятия</h1>');
    }
})


showEvents();

$('#selectGod').change(showEvents);

function showEvents(){
    $.ajax({
        url:"/test/event/selectEvents.php",
        method: "get",
        dataType: "json",
        async: false,
        data: {
            year: $('#selectGod').val()
        },
        success: function(data){
            $('#mainFrame').html("<table class='table table-sm'><thead><tr><td scope='col' class='th-sm'><b>#</td><td scope='col' class='th-sm text-left'><b>Название</td><td scope='col' class='th-sm'><b>Уровень</td><td scope='col' class='th-sm'><b>Дата начала</td><td scope='col' class='th-sm'><b>Дата окончания</td><td></td></tr></thead><tbody class='tbod'>");
            $.each(data, function(index, element) {
                if (element.event_status == 0){
                    $('.tbod').append("<tr class='text-black-50'><th scope='row'>" + index + "</th><td class='text-left' style='text-decoration: line-through' >" + element.event_name + "</td><td class='text-center'>" + element.event_uroven + "</td><td class='text-center date'>" + renameDate(element.event_dateOT) + "</td><td class='text-center date'>" + renameDate(element.event_dateDO) + "</td><td class='text-center'><a id='" + element.event_id + "' type='button' class='showEventInfo' data-toggle='modal' data-target='#exampleModal'><img src='/test/icons/eye.svg' alt='' width='20' height='20' title='Просмотреть'></td></tr>" );
                }else{
                    $('.tbod').append("<tr class='hov'><th scope='row'>" + index + "</th><td class='text-left'>" + element.event_name + "</td><td class='text-center'>" + element.event_uroven + "</td><td class='text-center date'>" + renameDate(element.event_dateOT) + "</td><td class='text-center date'>" + renameDate(element.event_dateDO) + "</td><td class='text-center'><a id='" + element.event_id + "' type='button' class='showEventInfo' data-toggle='modal' data-target='#exampleModal'><img src='/test/icons/eye.svg' alt='' width='20' height='20' title='Просмотреть'></td></tr>" );
                }
            });
            $('#mainFrame').append("</tbody></table>");
        },
        error: function(){

        }
    });

    $.get('/test/card.php', function(data2){
        $('#idModal').html("<form id='konkurs_modal' class='form-group'>" + data2);
    });

$('.showEventInfo').on("click", function(){
    showEventInfo($(this).attr("id"));
})

}

function showEventInfo(event_id){

    $.ajax({
        url:"/test/event/selectEventInfo.php",
        method: "get",
        dataType: "json",
        async: false,
        data: {
            year: $('#selectGod').val(),
            event_id: event_id
        },
        success: function(data){

            
            $('.modal-header').attr("class", "d-none");
            $('.modal-dialog').attr("class", "modal-dialog modal-lg");
            $('.card-img-top').attr('height', '150');
            $('.card-img-top').attr('src', '/test/line.png');
            $('.modal-footer').attr("class", "d-none");
            $('.card-title').html(data.event_name);
            if (data.event_status == 0){
                $('.card-title').append("<br><h6>Статус: мероприятие завершено</h6>");
            }
            if (data.event_status == 1){
                $('.card-title').append("<br><h6>Статус: идет прием документов</h6>");
            }
            if (data.event_status == 2){
                $('.card-title').append("<br><h6>Статус: идет подведение итогов</h6>");
            }
            $('.card-text').html("<b>Уровень:  </b>" + data.event_uroven + "<br>");
            $('.card-text').append("<b>Организатор:  </b>" + data.event_age + "<br>");
            $('.card-text').append("<b>Дата начала:  </b>" + renameDate(data.event_dateOT) + "<br>");
            $('.card-text').append("<p><b>Дата окончания:  </b>" + renameDate(data.event_dateDO) + "</p>");
            $('.card-text').append("<p><b>Описание:  </b><br>" + data.event_discription + "</p>");
            $('#event_link').removeClass("d-none");
            $('#event_link').html("Скачать положение");
            $('#event_link').attr("href", "files/" + $('#selectGod').val() +"/"+ data.event_link);
            if (data.event_link == null || data.event_link == '') {
                $('#event_link').addClass("d-none");
                $('#event_link').html("Положения нет");
            }
        },
        error: function(){

        }
    })
}

function renameDate(event_date){
    arr = event_date.split('-');
    if (arr[1] == 01) {mounth = 'января';}
    if (arr[1] == 02) {mounth = 'февраля';}
    if (arr[1] == 03) {mounth = 'марта';}
    if (arr[1] == 04) {mounth = 'апреля';}
    if (arr[1] == 05) {mounth = 'мая';}
    if (arr[1] == 06) {mounth = 'июня';}
    if (arr[1] == 07) {mounth = 'июля';}
    if (arr[1] == 08) {mounth = 'августа';}
    if (arr[1] == 09) {mounth = 'сентября';}
    if (arr[1] == 10) {mounth = 'октября';}
    if (arr[1] == 11) {mounth = 'ноября';}
    if (arr[1] == 12) {mounth = 'декабря';}
    return (arr[2]+" "+ mounth + " " + arr[0]);
}

</script>