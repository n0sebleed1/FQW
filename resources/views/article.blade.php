@extends('layout.app')

@section('title')
    {{ $news->name }}
@endsection

@section('content')
    <div class="article-block">
        <h1 class="article-block__name">{{ $news->name }}</h1>
        <div class="article-block__profile">
            <img src="{{ asset('img/default_avatar.png') }}" width="50px" height="50px">
            <div class="article-block__data">
                <p class="article-block__data-name">Айрат Нигматзянов</p>
                <p class="article-block__data-id">02.02.2004</p>
            </div>
        </div>
        <p class="article-block__text">{{ $news->text }}</p>
        @if($news->code != null)
            <p class="article-block__code">{{ $news->code }}</p>
        @endif
        @if($news->image != null)
            <img class="article-block__image" src="{{ $news->image }}" width="665px">
        @endif
    </div>
@endsection