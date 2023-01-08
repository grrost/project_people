<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
        <title>Электронное дополнительное образование</title>
        <link rel="shortcut icon" href="/test/25359.png" type="image/png">
        <link rel="stylesheet" href="/test/css/bootstrap/bootstrap.min.css"/>  
        <link rel="stylesheet" href="/test/css/jquery.dataTables.min.css"/>    
        <link rel="stylesheet" href="/test/css/font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/test/css/toastr.min.css"/>
        
        <script src="/test/jquery/jquery-3.5.1.min.js"></script>
        <script src="/test/jquery/popper.min.js"></script> 
        <script src="/test/jquery/bootstrap.min.js"></script>
        <script src="/test/JS/function.js"></script>
        <script src="/test/JS/jquery.dataTables.min.js"></script>
        <script src="/test/JS/jquery.popmenu.js"></script>
        <script src="/test/JS/toastr.min.js"></script>

        <?php include_once 'modalWindow3.php'; ?>
        <?php include_once 'modalWindow2.php'; ?>
        <?php include_once 'modalWindow.php'; ?>
        <?php include_once 'toast.php'; ?>

        <script src="/test/JS/moveElement.js"></script>

        <style>

       @font-face {
        font-family: Cinzel; /* Гарнитура шрифта */
        src: url(/test/15352.ttf); /* Путь к файлу со шрифтом */
       }
		
		body{
			background-image: url(/test/78.png);
            background-attachment: fixed;
            font-family: Arial;
            font: monospace;
            font-size: 15px;
            overflow-y: scroll;
		}

        td,th{
            cursor: default;
        }
        
        .sidebar-nav{
            position: fixed;
        }

        .hov:hover{
            background-color: #ddd;
        }
        .sel{
            background-color: #9acd32;
        }

        .modal-backdrop {
            background: none;
        }

        .modal-backdrop.show {
            opacity: .8;
        }

        body:not(.modal-open){
            padding-right: 0px !important;
        }

        .input-group-text{
            width: 100px;
        }

        .popover {
            min-width:500px;
            max-width:800px;
        }

        .list-group-item{
            padding: .35rem 1.25rem !important;
        }
                

        #calendar {
        width: 100%;
        font: monospace;
        line-height: 1.2em;
        font-size: 15px;
        text-align: center;
        }
        #calendar thead tr:last-child {
        font-size: small;
        color: rgb(232 232 232);
        }
        #calendar thead tr:nth-child(1) td:nth-child(2) {
        color: rgb(209 225 255);
        }
        #calendar thead tr:nth-child(1) td:nth-child(1):hover, #calendar thead tr:nth-child(1) td:nth-child(3):hover {
        cursor: pointer;
        }
        #calendar tbody td {
        color: rgb(218 218 218);
        }
        #calendar tbody td:nth-child(n+6), #calendar .holiday {
        color: rgb(231, 140, 92);
        }
        #calendar tbody td.today {
        background: rgb(220, 0, 0);
        color: #fff;
        border-radius: 5px;
        }

        .main_blocks{
            background-color: rgb(0 0 0 / 26%); 
            padding: 2px; 
            border-radius: 0.1rem;
            margin-bottom: 7px; 
            border: 1px solid #929292;
        }

        </style>

	</head>
    <body>
        
