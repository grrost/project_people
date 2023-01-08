 <style>
    #navigator .nav a{
        padding-left: 4px;
    }
    #navigator .nav a span{
        /* Container properties */
        left:45px;
        position:absolute;

        /* Text properties */
        font-family:'Myriad Pro',Arial, Helvetica, sans-serif;
        
        font: monospace;
        font-size: 15px;        

        xxxfont-size:18px;
        font-weight:bold;
        letter-spacing:0.6px;
        white-space:nowrap;
        line-height:39px;
		color: #0ff;
		text-shadow: 1px 1px 1px black;
        
        /* CSS3 Transition: */
        -webkit-transition: 0.25s;
        
        /* Future proofing (these do not work yet): */
        -moz-transition: 0.25s;
        transition: 0.25s;
    }

    #navigator .nav a:hover span{ 
        width:auto; 
        padding:0 3px;
    }
    #navigator .nav a:hover{
        text-decoration:none;
    }

    .nav-link {
        padding: .2rem 1rem; !important;
    }
    .activity {
        border-right: 4px solid orange;
        background-color: #28a745;
    }
	.btn-grd-danger,
.btn-grd-disabled,
.btn-grd-info,
.btn-grd-inverse,
.btn-grd-primary,
.btn-grd-success,
.btn-grd-warning,
.btn-grd-warning {
  background-size: 200% auto;
  -webkit-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
  color: #fff;
}
.btn-grd-danger:hover,
.btn-grd-disabled:hover,
.btn-grd-info:hover,
.btn-grd-inverse:hover,
.btn-grd-primary:hover,
.btn-grd-success:hover,
.btn-grd-warning:hover,
.btn-grd-warning:hover {
  background-position: right center;
}
.btn-grd-danger.hor-grd,
.btn-grd-disabled.hor-grd,
.btn-grd-info.hor-grd,
.btn-grd-inverse.hor-grd,
.btn-grd-primary.hor-grd,
.btn-grd-success.hor-grd,
.btn-grd-warning.hor-grd,
.btn-grd-warning.hor-grd {
  background-size: auto 200%;
}
.btn-grd-danger.hor-grd:hover,
.btn-grd-disabled.hor-grd:hover,
.btn-grd-info.hor-grd:hover,
.btn-grd-inverse.hor-grd:hover,
.btn-grd-primary.hor-grd:hover,
.btn-grd-success.hor-grd:hover,
.btn-grd-warning.hor-grd:hover,
.btn-grd-warning.hor-grd:hover {
  background-position: bottom center;
}
	.btn-grd-primary {
		background-image: -webkit-gradient(linear, left top, right top, from(#77aaff), color-stop(51%, #0764ff), to(#77aaff));
		background-image: linear-gradient(to right, #77aaff 0%, #0764ff 51%, #77aaff 100%);
	}
 </style>
 
 <div id="page-content-wrapper">
    <div class="container-fluid" style="min-width: 660px;">
        <div class="row">
            <div id="demo_box" class="d-none" style="color: #444; position: absolute; top: 0; left: 10px; z-index: 2">
                <span class="pop_ctrl"><i class="fa fa-bars" style="font-size: 40px; line-height: 70px;"></i></span>
                <ul id="demo_ul">
                    <li class="demo_li">
                        <a href="/test/" class="align-content-around">
                            <i class="fa" style="line-height:4">                                
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-people" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                </svg>
                            </i>
                            <div>Списки</div>
                        </a>
                    </li>
                    <li class="demo_li">
                        <a href="/test/zhurnal/" class="align-content-around">
                            <i class="fa" style="line-height:4">                                
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-book" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 0 0 1 2.82z"/>
                                    <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
                                </svg>
                            </i>
                            <div>Журнал</div>
                        </a>
                    </li>
                    <li class="demo_li">
                        <a href="/test/pedagogi/" class="align-content-around">
                            <i class="fa" style="line-height:4">                                
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-book" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                </svg>
                            </i>
                            <div>Педагоги</div>
                        </a>
                    </li>
                    <li class="demo_li">
                        <a href="/test/konkurs/" class="align-content-around">
                            <i class="fa" style="line-height:4">                                
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-award" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                            </i>
                            <div>Конкурсы</div>
                        </a>
                    </li>
                    <li class="demo_li">
                        <a href="/test/files/" class="align-content-around">
                            <i class="fa" style="line-height:4">                               
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                                    <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </i>
                            <div>Файлы</div>
                        </a>
                    </li>
                    <li class="demo_li">
                        <a href="/test/expert/" class="align-content-around">
                            <i class="fa" style="line-height:4">                             
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-journal-check" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2zm10 7v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1zM2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z"/>
                                    <path fill-rule="evenodd" d="M15.854 2.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 4.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </i>
                            <div>Программы</div>
                        </a>
                    </li>
                    <li class="demo_li">
                        <a href="/test/event/" class="align-content-around">
                            <i class="fa" style="line-height:4">                                
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-calendar" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </i>
                            <div>События</div>
                        </a>
                    </li>
                    <li class="demo_li">
                        <a href="/test/otchet/" class="align-content-around">
                            <i class="fa" style="line-height:4">                                
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-graph-up" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
                                    <path fill-rule="evenodd" d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"/>
                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </i>
                            <div>Отчеты</div>
                        </a>
                    </li>
                    <li class="demo_li">
                        <a href="/test/admin/" class="align-content-around">
                            <i class="fa" style="line-height:4">                               
                                <svg width="40" height="40" viewBox="0 0 16 16" class="bi bi-tools" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
                                    <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                                </svg>
                            </i>
                            <div>Админ</div>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="navigator" class="col-lg-2 col-md-2 col-sm-2 col-2">
                <div class="row sticky-top">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 10px">
					<div class="rounded">
                        <nav class="nav flex-column form-group rounded main_blocks shadow">
                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/test/">
                                <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-people" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                </svg>
                                <span class="b-txt">&#160;&#160;Списки</span>
                            </a>

                            <?php 
                                if($this->userAcess != 0){
                                    echo '<a class="nav-link d-flex align-items-center font-weight-bold" href="/test/zhurnal/">
                                    <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-book" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 0 0 1 2.82z"/>
                                        <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
                                    </svg><span class="b-txt">&#160;&#160;Журнал</span></a>';
                                }
                            ?>

                            <?php 
                                if($this->userAcess != 0){
                                    echo '<a class="nav-link d-flex align-items-center font-weight-bold" href="/test/pedagogi/">
                                    <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-book" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                    </svg><span class="b-txt">&#160;&#160;Педагоги</span></a>';
                                }
                            ?>

                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/test/konkurs/">
                                <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-award" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                                <span class="b-txt">&#160;&#160;Конкурсы</span>
                            </a>

                           <a class="nav-link d-flex align-items-center font-weight-bold" href="/test/konkurs2/">
                                <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-award" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                                <span class="b-txt">&#160;&#160;Пед Конкурсы</span>
                            </a>

                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/test/files/">
                                <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                                    <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                <span class="b-txt">&#160;&#160;Файлы</span>
                            </a>

                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/test/expert/">
                                <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-journal-check" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2zm10 7v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1zM2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z"/>
                                    <path fill-rule="evenodd" d="M15.854 2.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 4.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                <span class="b-txt">&#160;&#160;Программы</span>
                            </a>

                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/test/event/">
                                <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-calendar" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                <span class="b-txt">&#160;&#160;События</span>
                            </a>

                            <?php 
                                if($this->userAcess != 0){
                                    echo '<a class="nav-link d-flex align-items-center font-weight-bold" href="/test/otchet/">
                                        <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-graph-up" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
                                            <path fill-rule="evenodd" d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"/>
                                            <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        
                                        <span class="b-txt">&#160;&#160;Отчеты</span>
                                    </a>';

                                    echo '<a class="nav-link d-flex align-items-center font-weight-bold" href="/test/admin/">
                                        <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-tools" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
                                            <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                                        </svg>
                                        
                                        <span class="b-txt">&#160;&#160;Админ</span>
                                    </a>';
                                }
                            ?>
                            
                            <a class="nav-link d-flex align-items-center font-weight-bold" href="/test/samoanaliz/">
                                <svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-calendar" fill="#00FFFF" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                <span class="b-txt">&#160;&#160;Самоанализ</span>
                            </a>
                            
                            <div class="input-group input-group-sm text-left" style="padding-top: 10px">
                                <select id="selectGod" class="form-control">
                                    <option value="2016-2017">2016-2017 год</option>
                                    <option value="2017-2018">2017-2018 год</option>    
                                    <option value="2018-2019">2018-2019 год</option>    
                                    <option value="2019-2020">2019-2020 год</option>
                                    <option value="2020-2021">2020-2021 год</option>
                                    <option value="2021-2022">2021-2022 год</option>
                                    <option selected value="2022-2023">2022-2023 год</option>
                                </select>
                            </div>

                        </nav>
					</div>

                        <div class="form-group text-bold rounded main_blocks shadow" style="">
                            <div class="rounded">
                                <table id="calendar"  border="0" cellspacing="0" cellpadding="1">
                                    <thead>
                                        <tr><td><b>‹</b><td colspan="5"><td><b>›</b>
                                        <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group text-bold">
                            <div class="rounded main_blocks shadow" style="">
                                <div class="text-white rounded">
                                    Вы вошли как:
                                    <br><?php echo $this->userName; ?>
                                    <button id="exit" class="btn btn-sm btn-primary w-100">Выйти</button>
                                </div>
                            </div>
                        </div>

                        <script>
                            function calendar(id, year, month) {
                            var Dlast = new Date(year,month+1,0).getDate(),
                                D = new Date(year,month,Dlast),
                                DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
                                DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
                                calendar = '<tr>',
                                month=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
                            if (DNfirst != 0) {
                            for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
                            }else{
                            for(var  i = 0; i < 6; i++) calendar += '<td>';
                            }
                            for(var  i = 1; i <= Dlast; i++) {
                            if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
                                calendar += '<td class="today">' + i;
                            }else{
                                calendar += '<td>' + i;
                            }
                            if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
                                calendar += '<tr>';
                            }
                            }
                            for(var  i = DNlast; i < 7; i++) calendar += '<td> ';
                            document.querySelector('#'+id+' tbody').innerHTML = calendar;
                            document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
                            document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
                            document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
                            if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
                                document.querySelector('#'+id+' tbody').innerHTML += '<tr><td> <td> <td> <td> <td> <td> <td> ';
                            }
                            }
                            calendar("calendar", new Date().getFullYear(), new Date().getMonth());
                            // переключатель минус месяц
                            document.querySelector('#calendar thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
                            calendar("calendar", document.querySelector('#calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar thead td:nth-child(2)').dataset.month)-1);
                            }
                            // переключатель плюс месяц
                            document.querySelector('#calendar thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
                            calendar("calendar", document.querySelector('#calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar thead td:nth-child(2)').dataset.month)+1);
                            }
                        </script>

                    </div>
                </div>
            </div>


                    <script>

                        $.each( $('.nav-link'), function(index, value){
                            if (value.href == window.location.href){
                                $(this).addClass('activity waves-effect waves-light btn-grd-success');
                                $('title').html('ЭДО -'+$.trim( $('span', this ).html() ) );
                            }
                        })

                        $('#exit').on("click", function(){
                            $.ajax({
                                url:"/test/unsetCoocie.php",
                                method: "get",
                                dataType: "html",
                                async: false,
                                data: {
                                },
                                success: function(){
                                    window.location.href = '/test/';
                                }
                            })
                        })

                        // чтобы скролилось первое модальное окно, после закрытия второго
                        $('body').on('hidden.bs.modal', function () {
                            if ($('.modal.show').length > 0) {
                                $('body').addClass('modal-open');
                            }
                        });

                        $(window).ready(dopMenu);

                        $(window).on('resize', dopMenu);
                        
                        
                        function dopMenu() {
                              var win = $(window).width();
                              if (win < 1000) { 
                                 $('#navigator').addClass('d-none');
                                 $('#demo_box').removeClass('d-none');
                                 $('#pageContent').removeClass();
                                 $('#pageContent').addClass('col-lg-12 col-md-12 col-sm-12 col-12');
                                 $('#demo_box').popmenu({'background':'#e67e22','focusColor':'#c0392b','borderRadius':'0'});
                              }
                              if (win > 1000) { 
                                 $('#navigator').removeClass('d-none');
                                 $('#demo_box').addClass('d-none');
                                 $('#pageContent').removeClass();
                                 $('#pageContent').addClass('col-lg-10 col-md-10 col-sm-10 col-10');
                              }
                         };

                    </script>

            <div id="pageContent" class="col-lg-10 col-md-10 col-sm-10 col-10" style="margin:10px 0 10px 0">
                <div class="container-fluid shadow rounded flex-nowrap " style="background-color: #fff; min-height: 97vh; padding-bottom: 10px">
