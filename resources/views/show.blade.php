@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <p>{{ $article->content }}</p>
    <p>{{ $article->user_name }}</p>

    <p>
        <a href={{ route('article.list') }} class='btn btn-outline-primary'>一覧に戻る</a>
        <a href="{{route('article.edit', ['id' => $article->id])}}" class='btn btn-outline-primary'>編集</a>
    </p>
    <form method="POST" action="{{ route('article.delete', $article->id) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除" class='btn btn-outline-secondary'>
    </form>
@endsection
