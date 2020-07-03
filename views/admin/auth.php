<?php include ROOT.'/views/header.php'; ?>
<form action="" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-4 d-flex flex-column text-center m-auto" id="login-form">
                <h1 class="pt-3" id="title-login">Авторизация</h1>
                <p>Для входа введите логин и пароль</p>
                <p>Логин:</p>
                <input type="text" class="form-control" id="text-login" placeholder="Ваш логин" name="login">
                <p>Пароль:</p>
                <input type="password" class="form-control" id="text-login" placeholder="Ваш пароль" name="password">
                <button type="submit" class="form-control mt-3 mb-3 text-uppercase" id="login-btn" name="submit">Войти</button>
            </div>
        </div>
    </div>
</form>
<?php include ROOT.'/views/footer.php'; ?>