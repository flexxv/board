<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Доска объявлений</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="../resources/css/main.css">

        
    </head>
    <body>
    <div class="navbar">
        <div class="logo">Логотип</div>
        <div class="nav-links">
            <a href="#">Главная</a>
            <a href="#">Категории</a>
        </div>
        <div class="login-btn"><a href="#">Войти</a></div>
        <div class="register-btn"><a href="#">Регистрация</a></div>
    </div>

    @yield('content')
    </body>
</html>