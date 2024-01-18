<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="header__logo">LOGO</h1>
    </header>
    <main>
        <form class="registration">
            <h1 class="registration__title">Авторизация</h1>
            <input class="registration__input" type="text" placeholder="Логин">
            <input class="registration__input" type="password" placeholder="Пароль">
            <button class="registration__submit">Вход</button>
            <a class="registration__link" href="registration">У меня нет аккаунта</a>
        </form>
    </main>
</body>
</html>