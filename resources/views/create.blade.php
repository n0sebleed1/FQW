@extends('layout.app')

@section('title')
    Новая статья
@endsection

@section('content')
    <ul class="create-error">
        @foreach ($errors->all() as $message)
            <li class="create-error__message">{{ $message }}</li>
        @endforeach
    </ul>
    <form class="article" action="{{ route('create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="article__title">Новая статья</h1>
        <input name="name" class="article__input" type="text" placeholder="Название статьи...">
        <textarea name="text" class="article__input article__textarea" type="text" placeholder="Текст статьи..."></textarea>
        <textarea name="code" class="article__input article__textarea hiden" id="js__attach-code-input" type="text" placeholder="Введите код..."></textarea>
        <input name="image" class="article__input hiden" id="js__attach-image-input" type="file" accept="image/*">
        <button type="button" class="article__attach" id="js__attach-button">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30.000000px" height="30.000000px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#909090" stroke="none">
                    <path d="M276 624 c-13 -12 -16 -39 -16 -130 l0 -114 -114 0 c-127 0 -146 -8 -146 -60 0 -52 19 -60 146 -60 l114 0 0 -114 c0 -127 8 -146 60 -146 52 0 60 19 60 146 l0 114 114 0 c127 0 146 8 146 60 0 52 -19 60 -146 60 l-114 0 0 114 c0 91 -3 118 -16 130 -20 20 -68 20 -88 0z"/>
                </g>
            </svg>
            <p class="article__attach-text">Добавить вложение</p>
        </button>
        <button type="submit" class="article__button">Опубликовать</button>
        <a href="news" class="article__button">Назад</a>
    </form>
@endsection