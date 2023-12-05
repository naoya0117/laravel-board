@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <form method="POST" action="{{ route('article.store') }}">
        @csrf
        <div class='form-group'>
            <label for="content">Content:</label>
            <input type="text" id="content" name="content">
        </div>
        <div class='form-group'>
            <label for="user_name">Name:</label>
            <input type="text" id="user_name" name="user_name">
        </div>
        <div class="form-group">
            <input type="submit" value="作成する" class="btn btn-primary">
            <a href={{ route('article.list') }}>一覧に戻る</a>
        </div>
    </form>
@endsection