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
        <div class="home" id="home">
            <i class="fas fa-home"></i>
        </div>
        <div class="viewHome login">
            <div class="icon">
                <img src="src/Logo.png" alt="">
            </div>
            <form action="dashboard.php" method="POST">
                <label for="" class="user">Usuario</label>
                <input type="text" name="user" id="userLogin" required>
                <label for="" class="pass">Senha</label>
                <input type="password" name="pass" id="passLogin" required>
                <button type="submit" class="loginBtn">Logar</button>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <script>
        $(document).ready(function() {
            $('#home').click(function() {
                window.location.href = "index.php";
            });
            $('#btnTeste').click(function() {
                var $listSort = $('#passLogin');
                if ($listSort.attr('type')) {
                    $listSort.removeAttr('type');
                } else {
                    $listSort.attr('type', 'password');
                }
            });
        });
    </script>

</body>

</html>