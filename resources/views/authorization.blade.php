@extends('layout.header')

@section('title')
    Авторизация
@endsection

@section('content')
    <form class="registration">
        <h1 class="registration__title">Авторизация</h1>
        <input class="registration__input" type="text" placeholder="Логин">
        <input class="registration__input" type="password" placeholder="Пароль">
        <button class="registration__submit">Вход</button>
        <a class="registration__link" href="registration">У меня нет аккаунта</a>
    </form>
@endsection