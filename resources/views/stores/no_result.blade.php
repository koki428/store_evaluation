<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>No Result</title>
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
        <p>一致する結果はありません</p>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>