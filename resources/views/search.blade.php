<form method="get">
    {{ csrf_field() }}
    <div class='form-group'>
        <label id='keyword'>キーワード:</label>
        <input type="text" name="keyword" class="form-control">
    </div>
    <div class='form-group'>
        <input type="submit" value="検索" class="btn btn-outline-primary">
        <a href={{ route('article.list') }}>クリア</a>
    </div>
</form>