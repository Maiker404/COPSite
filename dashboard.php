<?php  ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="src/Logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Maiker</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="css/util.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/response.css" rel="stylesheet">
</head>

<body>
    <div class="interface toFade">
        <div class="menu" id="MenuPane">
            <img src="src/Logo.png" alt="" class="logo" id="logohome">
            <ul class="lista">
                <a class="link ativo" id="dash">
                    <li>
                        <i class="fas fa-th"></i>
                    </li>
                </a>
                <a class="link " id="proj">
                    <li>
                        <i class="fas fa-clipboard-list"></i>
                    </li>
                </a>
                <a class="link" id="tare">
                    <li>
                        <i class="fas fa-tasks"></i>
                    </li>
                </a>
                <a class="link" id="config">
                    <li>
                        <i class="fas fa-cogs"></i>
                    </li>
                </a>
            </ul>
        </div>
        <div class="topo">
            <div class="menuBtn">
                <i class="fas fa-list" id="menuToggle"></i>
                <h4 class="titulo">Dashboard</h4>
            </div>
            <div id="opt" class="options">
                <div class="btn" id="novo">
                    <i class="fas fa-plus"></i>
                </div>
                <div id="edit" class="btn">
                    <i class="fas fa-pen"></i>
                </div>
                <div id="excluir" class="btn">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
        </div>
        <div class="view viewExpand" id="ViewPane">
            <div class="card">
                <img src="src/Logo.png" alt="" class="logopro">
                <label for="" class="titulo">COP</label>
                <label for="" class="nome">Criador e Organizador de Projetos</label>
                <div class="time">
                    <img src="src/kassio.jpg" alt="" class="foto" id="kassio">
                    <img src="src/mayque.jpg" alt="" class="foto" id="mayque">
                    <img src="src/hagatta.jpg" alt="" class="foto" id="hagatta">
                    <img src="src/maiker.jpg" class="foto " id="maiker">
                </div>
                <label for="" class="data">06/07/2010</label>
                <i class="fas fa-check"></i>
            </div>
            <div class="card">
                <img src="src/Logo.png" alt="" class="logopro">
                <label for="" class="titulo">COPSite</label>
                <label for="" class="nome">Criador e Organizador de Projetos Online</label>
                <div class="time">
                    <img src="src/kassio.jpg" alt="" class="foto" id="kassio">
                    <img src="src/mayque.jpg" alt="" class="foto" id="mayque">
                    <img src="src/hagatta.jpg" alt="" class="foto" id="hagatta">
                    <img src="src/maiker.jpg" class="foto " id="maiker">
                </div>
                <label for="" class="data">06/07/2010</label>
                <i class="fas fa-check final"></i>
            </div>
            <div class="card">
                <img src="src/Logo.png" alt="" class="logopro">
                <label for="" class="titulo">COP</label>
                <label for="" class="nome">Criador e Organizador de Projetos</label>
                <div class="time">
                    <img src="src/kassio.jpg" alt="" class="foto" id="kassio">
                    <img src="src/mayque.jpg" alt="" class="foto" id="mayque">
                    <img src="src/hagatta.jpg" alt="" class="foto" id="hagatta">
                    <img src="src/maiker.jpg" class="foto " id="maiker">
                </div>
                <label for="" class="data">06/07/2010</label>
                <i class="fas fa-check"></i>
            </div>
            <div class="card">
                <img src="src/Logo.png" alt="" class="logopro">
                <label for="" class="titulo">COP</label>
                <label for="" class="nome">Criador e Organizador de Projetos</label>
                <div class="time">
                    <img src="src/kassio.jpg" alt="" class="foto" id="kassio">
                    <img src="src/mayque.jpg" alt="" class="foto" id="mayque">
                    <img src="src/hagatta.jpg" alt="" class="foto" id="hagatta">
                    <img src="src/maiker.jpg" class="foto " id="maiker">
                </div>
                <label for="" class="data">06/07/2010</label>
                <i class="fas fa-check final"></i>
            </div>
            <div class="card">
                <img src="src/Logo.png" alt="" class="logopro">
                <label for="" class="titulo">COP</label>
                <label for="" class="nome">Criador e Organizador de Projetos</label>
                <div class="time">
                    <img src="src/kassio.jpg" alt="" class="foto" id="kassio">
                    <img src="src/mayque.jpg" alt="" class="foto" id="mayque">
                    <img src="src/hagatta.jpg" alt="" class="foto" id="hagatta">
                    <img src="src/maiker.jpg" class="foto " id="maiker">
                </div>
                <label for="" class="data">06/07/2010</label>
                <i class="fas fa-check"></i>
            </div>
            <div class="card">
                <img src="src/Logo.png" alt="" class="logopro">
                <label for="" class="titulo">COP</label>
                <label for="" class="nome">Criador e Organizador de Projetos</label>
                <div class="time">
                    <img src="src/kassio.jpg" alt="" class="foto" id="kassio">
                    <img src="src/mayque.jpg" alt="" class="foto" id="mayque">
                    <img src="src/hagatta.jpg" alt="" class="foto" id="hagatta">
                    <img src="src/maiker.jpg" class="foto " id="maiker">
                </div>
                <label for="" class="data">06/07/2010</label>
                <i class="fas fa-check"></i>
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#logohome').click(function() {
                window.location.href = "index.php";
            });
            $('div.card').click(function() {
                window.location.href = "index.php";
            });
            $('i#menuToggle').click(function() {
                $('#MenuPane').toggleClass('menuactiv');
                $('#ViewPane').toggleClass('viewExpand');
            });
            $('a.link').click(function(event) {
                var id = $(this).attr('id');
                $('a.link').removeClass('ativo');
                $('div#opt').removeClass('activ');
                if (id === 'dash') {
                    $('#dash').addClass('ativo');
                    $('h4.titulo').text("Dashboard");
                    $('title').text("Dashboard - Maiker");
                } else if (id === 'proj') {
                    $('#proj').addClass('ativo');
                    $('div#opt').addClass('activ');
                    $('h4.titulo').text("Projetos");
                    $('title').text("Projetos - Maiker");
                } else if (id === 'tare') {
                    $('#tare').addClass('ativo');
                    $('div#opt').addClass('activ');
                    $('h4.titulo').text("Tarefas");
                    $('title').text("Tarefas - Maiker");
                } else if (id === 'config') {
                    $('a.link#config').addClass('ativo');
                    $('h4.titulo').text("Configurações");
                    $('title').text("Configurações - Maiker");
                }
            });
        });
    </script>
</body>

</html>