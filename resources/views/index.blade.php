@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <table class="table table-striped tabble-hover">
        @foreach ($articles as $article)
            <tr>
                <td>
                    <a href='{{ route('article.show', ['id' => $article->id]) }}'>
                        {{ $article->content }}
                    </a>
                </td>
                <td>
                    {{ $article->user_name }}
                </td>
        @endforeach
    </table>
    <div>
        <a href={{ route('article.new') }} class='btn btn-outline-primary'>新規投稿</a>
    </div>
@endsection
