@extends('layout.header')

@section('title')
    Регистрация
@endsection

@section('content')
    <form action="{{ route('register') }}" method="post" novalidate autocomplete="off" class="registration">
        @csrf
        <ul class="error">
            @foreach ($errors->all() as $message)
                <li class="error__message">{{ $message }}</li>
            @endforeach
        </ul>
        <h1 class="registration__title">Регистрация</h1>
        <input class="{{ $errors->has('name') ? 'error__input' : 'registration__input'}}" autofocus name="name" value="{{ old('name') }}" id="login" type="text" placeholder="Логин">
        <input class="{{ $errors->has('password') ? 'error__input' : 'registration__input'}}" name="password" id="password" type="password" placeholder="Пароль">
        <input class="{{ $errors->has('password_confirmation') ? 'error__input' : 'registration__input'}}" name="password_confirmation" id="confirm_password" type="password" placeholder="Повтор пароля">
        <input class="{{ $errors->has('email') ? 'error__input' : 'registration__input'}}" name="email" type="email" value="{{ old('email') }}" id="email" placeholder="Email">
        <button type="submit" class="registration__submit">Регистрация</button>
        <a class="registration__link" href="login">У меня уже есть аккаунт</a>
    </form>
@endsection