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
            <img src="src/Dash.PNG" alt="" class="preview">
            <p class="desc">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <label for="">Equipe de desenvolvimento</label>
            <div class="sobre">
                <img src="src/kassio.jpg" alt="" class="foto" id="kassio">
                <img src="src/mayque.jpg" alt="" class="foto" id="mayque">
                <img src="src/hagatta.jpg" alt="" class="foto" id="hagatta">
                <img src="src/maiker.jpg" class="foto " id="maiker">
            </div>
            <label for="" class="nomeDev" id="dev">Desenvolvedores</label>
            <p class="descDev" id="infodev">Desenvolvedores que fizeram o site baseado no programa Desktop COP!</p>
            <br><br><br><br><br><br><br><br><br>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <script src="js/main.js "></script>

</body>

</html>