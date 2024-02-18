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
                <p class="article-block__data-name">kofeine</p>
                <p class="article-block__data-id">{{ $news->created_at }}</p>
            </div>
        </div>
        <p class="article-block__text">{{ $news->text }}</p>
        @if($news->code != null)
            <pre><code class=" language-js">{{ $news->code }}</code></pre>
        @endif
        @if($news->image != null)
            <img width="670px" class="article-block__img" src="{{ asset('storage/app/public/' . $news->image) }}">
        @endif
        <form class="article-block__likes" action="{{ route('like') }}" method="post">
        @csrf
            <button class="article-block__likes-button" 
            @if($like){
                disabled
                style="cursor: default;"
            }
            @else
                style="cursor: pointer;"
            @endif
            type="submit">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25.000000px" height="25.000000px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                    <g class="article-block__likes-count" transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="
                    @if($like)
                        #FF0000
                    @else
                        #FFFFFF
                    @endif
                    " stroke="none">
                        <path d="M127 589 c-55 -13 -83 -35 -107 -83 -38 -79 -20 -155 63 -258 39 -50 216 -198 236 -198 42 0 261 215 300 294 85 173 -133 333 -276 203 l-23 -20 -22 20 c-46 42 -107 57 -171 42z"/>
                    </g>
                </svg>
            </button>
            <p class="article-block__likes-count">{{ $news->likes_count }}</p>
            <input class="hiden" name="id" value="{{ $news->id }}">
            <input class="hiden" type="number" name="likes_count" value="{{ $news->likes_count }}">
        </form>
    </div>
@endsection