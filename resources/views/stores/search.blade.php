<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Result</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>検索結果</h1>
        <form action="/stores/search" method="GET">
            @csrf
            <input type="text" name="keyword">
            <input type="submit" name="search" value="検索">
        </form>
        <div class='stores'>
            @foreach ($stores as $store) 
            <div class='store'>
                <h2 class='store_name'>
                    <a href="/stores/{{ $store->id }}">{{ $store->name }}</a>
                </h2>
                <p>評価：{{ $store->average }}</p>
                <p>ジャンル：{{ $store->genre }}</p>
                <p>住所：{{ $store->address }}</p>
                <p>予算：{{ $store->budget }}</p>
            </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>