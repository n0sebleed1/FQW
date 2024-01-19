@extends('layout.header')

@section('title')
    Авторизация
@endsection

@section('content')
    <form action="{{ route('login') }}" method="post" novalidate class="registration">
        @csrf
        <ul class="error">
            @foreach ($errors->all() as $message)
                <li class="error__message">{{ $message }}</li>
            @endforeach
        </ul>
        <h1 class="registration__title">Авторизация</h1>
        <input name="email" id="email" class="{{ $errors->has('email') ? 'error__input' : 'registration__input'}}" autofocus type="text" placeholder="Email">
        <input name="password" id="password" class="{{ $errors->has('password') ? 'error__input' : 'registration__input'}}" type="password" placeholder="Пароль">
        <button class="registration__submit">Вход</button>
        <a class="registration__link" href="registration">У меня нет аккаунта</a>
    </form>
@endsection