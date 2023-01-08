    <div class="row text-center">
        <div class="col-lg-12">
            <div class="d-flex align-items-center float-right">
                <img src="/test/icons/tools.svg" width="50" height="50" alt="Card image cap">&#160;&#160;<h1>Администрирование</h1>
            </div>
        </div>
    </div>
    <div class="row text-right">
        <div class="col-lg-12">
            <button id="not_sertificat" class="btn btn-primary">Без сертификата</button>
            <button id="not_adress" class="btn btn-primary">Без адреса</button>
            <button id="add_people" class="btn btn-primary" data-toggle='modal' data-target='#exampleModal'>Добавить ребенка</button>
			<button id="prof_klass" class="btn btn-primary">Классификатор профессий</button>
        </div>
		<div class="col-lg-12">
			<div class="container">
			</div>
        </div>

    </div>

    <div class="row text-center">
        <div id="mainFrame" class="col-lg-12 text-left" style="padding-top: 10px">
        </div>
    </div>
</div>

<script>
ppl = new PEOPLE;
$('#not_sertificat').on("click", function(){
    $.ajax({
        url:"/test/admin/not_sertificat.php",
        method: "get",
        dataType: "json",
        async: false,
        data: {
            year: $('#selectGod').val()
        },
        success: function(data){
            $('#mainFrame').html("");
            $.each(data, function(ind, val){
                $('#mainFrame').append("<li><a id='"+val.people_id+"' class='people_info' href='#' data-toggle='modal' data-target='#exampleModal'>"+val.people_surname+' '+val.people_name+' '+val.people_otchestvo+' '+val.people_data+' ('+val.gruppa_name+')'+"</li>")
            })
            $('.people_info').on("click", function(){
                ppl.set_Modal_Window_Info($(this).attr('id'))
            })
        }
    })
})

$('#prof_klass').on("click", function(){
    $('#mainFrame').html('<iframe frameborder="0" height="600" src="https://widgetforesite.glavbukh.ru/kdelo/2021-05-job-code/?version=3" width="100%" id="iFrameResizer0" scrolling="yes" ></iframe>');
})

$('#not_adress').on("click", function(){
    $.ajax({
        url:"/test/admin/not_adress.php",
        method: "get",
        dataType: "json",
        async: false,
        data: {
            year: $('#selectGod').val()
        },
        success: function(data){
            $('#mainFrame').html("");
            $.each(data, function(ind, val){
                $('#mainFrame').append("<li><a id='"+val.people_id+"' class='people_info' href='#' data-toggle='modal' data-target='#exampleModal'>"+val.people_surname+' '+val.people_name+' '+val.people_otchestvo+' '+val.people_data+' ('+val.gruppa_name+')'+"</li>")
            })
            $('.people_info').on("click", function(){
                ppl.set_Modal_Window_Info($(this).attr('id'))
            })
        }
    })
})

$('#add_people').on("click", function(){
    ppl.add_people();
})

</script>