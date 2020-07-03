<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Document</title>
</head>
<body>
<header class="bg-primary">
    <div class="container p-3">
        <div class="row d-flex justify-content-between">
            <div class="col-auto">
                <h3 class="text-white"><a href="/" class="text-decoration-none text-white">Новости</a></h3>
            </div>
            <div class="col-auto">
            <?php
            if (isset($_SESSION['login'])):?>
            <p class="text-decoration-none text-white font-weight-bold">Здравствуйте,
                <?php
                echo $_SESSION['login'].'</p>';?>
                <a href="logout" class="text-white">Выйти</a>
                <?php else:?>
                    <a href="/admin" class="text-decoration-none text-white">Войти</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>