@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <p>{{ $article->content }}</p>
    <p>{{ $article->user_name }}</p>

    <p>
        <a href="{{ route('article.list') }}">一覧に戻る</a>
    </p>
    <form method="POST" action="{{ route('article.delete', $article->id) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除">
    </form>
@endsection