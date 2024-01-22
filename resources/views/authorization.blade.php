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
        <input type="email" id="email" name="email" class="{{ $errors->has('email') ? 'error__input' : 'registration__input'}}" autofocus placeholder="Email">
        <input type="password" id="password" name="password" class="{{ $errors->has('password') ? 'error__input' : 'registration__input'}}" placeholder="Пароль">
        <button type="submit" class="registration__submit">Вход</button>
        <a class="registration__link" href="registration">У меня нет аккаунта</a>
    </form>
@endsection