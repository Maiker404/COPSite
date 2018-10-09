<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="src/Logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C.O.P</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <div class="interface toFade">
        <div class="navHome">
            <div class="logonav">
                <img src="src/Logo.png" alt="" class="logonav">
                <label for="">COP</label>
            </div>
            <ul class="lista">
                <a href="login.php" class="link">
                    <li>
                        <i class="fas fa-sign-in-alt"></i>
                        <label for="">Logar</label>
                    </li>
                </a>
            </ul>
        </div>
        <div class="viewHome">
            <h3 class="titulo">COP</h3>
            <h4 class="subtitulo">Coordenador e organizador de projetos.</h4>
            <img src="src/dash.png" alt="" class="preview" id="previewIndex">
            <p class="desc">
                C.O.P é um site web feito para o gerenciamento de tarefas e de projetos. O sistema busca proporcionar mais facilidade e com mais organização e agilidade, os usuários se cadastram, cria projetos e subdivide os mesmos em tarefas que são atribuídas a outros usuários convidados.
            </p>
            <label for="">Equipe de desenvolvimento</label>
            <div class="sobre">
                <img src="src/kassio.jpg" alt="" class="foto" id="kassio">
                <img src="src/mayque.jpg" alt="" class="foto" id="mayque">
                <img src="src/hagatta.jpg" alt="" class="foto" id="hagatta">
                <img src="src/maiker.jpg" class="foto " id="maiker">
            </div>
            <label for="" class="subDev" id="dev">Desenvolvedores</label>
            <p class="descDev" id="infodev">Desenvolvedores que fizeram o site baseado no programa Desktop COP!</p>
            <label for="">Linguagens usadas</label>
            <div class="sobre">
                <i class="fab fa-html5" id="html"></i>
                <i class="fab fa-css3-alt" id="css"></i>
                <i class="fab fa-js-square" id="js"></i>
                <i class="fab fa-php" id="php"></i>
            </div>
            <label for="" class="subDev" id="lig">Linguagens</label>
            <p class="descDev" id="infolig">Usadas para desenvolver uma sistemática com uma sequência de regras aplicadas!</p>
            <br><br><br><br><br><br><br><br><br>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <script>
    var i = 0;
    $(document).ready(function(event) {
        setInterval(async function reloadFoto() {
            if (i == 0) {
                $('img#previewIndex').attr("src", "src/dash.png");
                i = 1;
            } else if (i == 1) {
                $('img#previewIndex').attr("src", "src/login.png");
                i = 0;
            }
            // else if (i == 2) {
            //     $('img#previewIndex').attr("src", "src/hagatta.jpg");
            //     i = 3;
            // } else if (i == 3) {
            //     $('img#previewIndex').attr("src", "src/kassio.jpg");
            //     i = 0;
            // }
        }, 5000);
        // Fotos developers
            // Hover
            $('img#maiker').mouseenter(function() {
                $('#dev').text("Maiker Helmet");
                $('#infodev').text("Desenvolvedor do framework do site!");
            });
            $('img#hagatta').mouseenter(function() {
                $('#dev').text("Hagatta Thaynara");
                $('#infodev').text("Desenvolvedora da estilistica do site!");
            });
            $('img#mayque').mouseenter(function() {
                $('#dev').text("Mayque Oliveira");
                $('#infodev').text("Desenvolvedor do wireframe do site!");
            });
            $('img#kassio').mouseenter(function() {
                $('#dev').text("Kassio Santos");
                $('#infodev').text("Desenvolvedor da funcionalidade do site!");
            });
            // Inhover
            $('img#maiker').mouseout(function() {
                $('#dev').text("Desenvolvedores");
                $('#infodev').text("Desenvolvedores que fizeram o site baseado no programa Desktop COP!");
            });
            $('img#hagatta').mouseout(function() {
                $('#dev').text("Desenvolvedores");
                $('#infodev').text("Desenvolvedores que fizeram o site baseado no programa Desktop COP!");
            });
            $('img#kassio').mouseout(function() {
                $('#dev').text("Desenvolvedores");
                $('#infodev').text("Desenvolvedores que fizeram o site baseado no programa Desktop COP!");
            });
            $('img#mayque').mouseout(function() {
                $('#dev').text("Desenvolvedores");
                $('#infodev').text("Desenvolvedores que fizeram o site baseado no programa Desktop COP!");
            });
        // Fim das fotos
        // Linguagens
            // Hover
            $('i#html').mouseenter(function() {
                $('#lig').text("HTML 5");
                $('#infolig').text("Desenvolvedor do framework do site!");
            });
            $('i#css').mouseenter(function() {
                $('#lig').text("CSS 3");
                $('#infolig').text("Desenvolvedora da estilistica do site!");
            });
            $('i#js').mouseenter(function() {
                $('#lig').text("JavaScript");
                $('#infolig').text("Desenvolvedor do wireframe do site!");
            });
            $('i#php').mouseenter(function() {
                $('#lig').text("PHP");
                $('#infolig').text("Desenvolvedor da funcionalidade do site!");
            });
            // Inhover
            $('i#html').mouseout(function() {
                $('#lig').text("Linguagens");
                $('#infolig').text("Usadas para desenvolver uma sistemática com uma sequência de regras aplicadas!");
            });
            $('i#css').mouseout(function() {
                $('#lig').text("Linguagens");
                $('#infolig').text("Usadas para desenvolver uma sistemática com uma sequência de regras aplicadas!");
            });
            $('i#js').mouseout(function() {
                $('#lig').text("Linguagens");
                $('#infolig').text("Usadas para desenvolver uma sistemática com uma sequência de regras aplicadas!");
            });
            $('i#php').mouseout(function() {
                $('#lig').text("Linguagens");
                $('#infolig').text("Usadas para desenvolver uma sistemática com uma sequência de regras aplicadas!");
            });
    });
    </script>

</body>

</html>