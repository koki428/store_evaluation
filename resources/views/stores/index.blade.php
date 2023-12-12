<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Website Name</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Website Title</h1>
        <form action="/stores/search" method="GET">
            @csrf
            <input type="text" name="keyword">
            <input type="submit" name="search" value="検索">
        </form>
        <a href='/stores/create'>管理者ページ</a>
    </body>
</html>