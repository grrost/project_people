
    <div class="row text-center">
        <div class="col-lg-12">
            <div class="d-flex align-items-center float-right">
                <img src="/test/icons/journal-check.svg" width="50" height="50" alt="Card image cap">&#160;&#160;<h1>Программы</h1>
            </div>
        </div>
    </div>


    <div class="row text-center">
        <div id="mainFrame" class="col-lg-12">
        </div>
    </div>

    <div class="row text-left">
        <div id="btn_down" class="col-lg-12 d-none">
        <div class="form-group">

                <div class="input-group">
                <input type="file" id="file-demo" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button id="upload" class="btn btn-success" type="button">Загрузить</button>
                    </div>
                </div>

        </div>
        </div>
    </div>

</div>

<script>
files = new FILES;

showExpert();

function showExpert(){
    $('#mainFrame').html('<h3 class="text-left">Программы</h3>')
    $('#mainFrame').append("<table class='table table-sm text-center'><thead><tr><td scope='col' class='th-sm'><b>#</td><td scope='col' class='th-sm text-left' style='width: 80%'><b>Название</td><td scope='col' class='th-sm'><b>Скачать</td><td scope='col' class='th-sm'><b>Удалить</td></tr></thead><tbody class='tbod'>");
    $.each(files.showFilesList('../expert/programm/'), function(index, value){
        if (index == 0 || index == 1 || value == 'index.php'){}else{
            linkDown = 'programm/'+value;
            linkId = value;
            $('.tbod').append("<tr class='hov'><th scope='row'>" + ( + index-2 ) + "</th><td class='text-left'>" + value + "</td><td><a href='"+linkDown+"' target='_blank' class='fileDownload' type='button'><img src='/test/icons/download.svg' alt='' width='20' height='20' title='Скачать'></td><td><a id='"+linkId+"' class='fileDel'><img src='/test/icons/trash-fill.svg' alt='' width='20' height='20' title='Удалить'></a></td></tr>" );
        }
    })
    $('#mainFrame').append("</tbody></table>");

        $('.fileDel').on("click", function(){
            if (confirm("Точно удалить?")){
                var linkFile = '../expert/programm/'+$(this).attr('id');
                files.fileDel(linkFile);
                showExpert();
            }
        })


    $('#mainFrame').append('<hr>');
    $('#mainFrame').append('<h3 class="text-left">Экспертизы / аннотации</h3>')
    $('#mainFrame').append("<table class='table table-sm text-center'><thead><tr><td scope='col' class='th-sm'><b>#</td><td scope='col' class='th-sm text-left' style='width: 80%'><b>Название</td><td scope='col' class='th-sm'><b>Скачать</td><td scope='col' class='th-sm'><b>Удалить</td></tr></thead><tbody class='tbody2'>");
    $.each(files.showFilesList('../expert/expert/'), function(index, value){
        if (index == 0 || index == 1){}else{
            linkDown = 'expert/'+value;
            linkId = value;
            $('.tbody2').append("<tr class='hov'><th scope='row'>" + ( + index-1 ) + "</th><td class='text-left'>" + value + "</td><td><a href='"+linkDown+"' target='_blank' class='fileDownload' type='button'><img src='/test/icons/download.svg' alt='' width='20' height='20' title='Скачать'></td><td><a id='"+linkId+"' class='fileDel2'><img src='/test/icons/trash-fill.svg' alt='' width='20' height='20' title='Удалить'></a></td></tr>" );
        }
    })
    $('#mainFrame').append("</tbody></table>");

    $("#upload").on('click', function() {
        files.fileUpload( $('#file-demo'), '../expert/expert/' );
        showExpert();
    });

    $('#btn_down').removeClass("d-none");

    $('.fileDel2').on("click", function(){
        if (confirm("Точно удалить?")){
            var linkFile = '../expert/expert/'+$(this).attr('id');
            files.fileDel(linkFile);
            showExpert();
        }
    })
    
}

</script>

