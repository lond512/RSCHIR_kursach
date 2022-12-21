<?php
$link = mysqli_connect('db', 'root', 'example');


set_error_handler(function (int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
}, E_WARNING);


echo <<<HTML
<head>
    <link rel="stylesheet" href="Styles/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<form method="POST" action="home.php">
  <div class="container">
    <h1>Вход</h1>
    <hr>
<p><a href = "home.php">Домой</a></p>
    <label for="login"><b>Логин</b></label>
    <input type="text" placeholder="Введите логин" name="login" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="psw" required>
<br><br>

    <button type="submit" class="btn btn-success">Войти</button>
  </div><br>

  <div class="container signin">
    <p>Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a>.</p>
  </div>
</form>

HTML;
