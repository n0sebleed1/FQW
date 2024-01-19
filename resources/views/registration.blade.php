@extends('layout.header')

@section('title')
    Регистрация
@endsection

@section('content')
    <form action="{{ route('register') }}" method="post" novalidate autocomplete="off" class="registration">
        @csrf
        <h1 class="registration__title">Регистрация</h1>
        <input class="registration__input" name="login" id="login" type="text" placeholder="Логин">
        <input class="registration__input" name="password" id="password" type="password" placeholder="Пароль">
        <input class="registration__input" name="confirm_password" id="confirm_password" type="password" placeholder="Повтор пароля">
        <input class="registration__input" name="name" type="text" id="name" placeholder="Имя">
        <input class="registration__input" name="surname" type="text" id="surname" placeholder="Фамилия">
        <button type="submit" class="registration__submit">Регистрация</button>
        <a class="registration__link" href="login">У меня уже есть аккаунт</a>
    </form>
@endsection