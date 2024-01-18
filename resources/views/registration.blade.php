<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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
            <h1 class="registration__title">Регистрация</h1>
            <input class="registration__input" type="text" placeholder="Логин">
            <input class="registration__input" type="password" placeholder="Пароль">
            <input class="registration__input" type="password" placeholder="Повтор пароля">
            <input class="registration__input" type="text" placeholder="Имя">
            <input class="registration__input" type="text" placeholder="Фамилия">
            <button class="registration__submit">Регистрация</button>
            <a class="registration__link" href="login">У меня уже есть аккаунт</a>
        </form>
    </main>
</body>
</html>