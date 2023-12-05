@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <form method="POST" action="{{ route('article.update', $article->id) }}">
        @csrf
        @method('PUT')
        <div class='form-group'>
            <label for="content">Content:</label>
            <input type="text" id="content" name="content" value="{{ $article->content}}">
        </div>
        <div class='form-group'>
            <label for="user_name">Name:</label>
            <input type="text" id="user_name" name="user_name" value="{{ $article->user_name}}">
        </div>
        <div class="form-group">
            <input type="submit" value="保存する" class="btn btn-primary">
            <a href={{ route('article.show', ['id' =>  $article->id]) }}>戻る</a>
        </div>
    </form>
@endsection
