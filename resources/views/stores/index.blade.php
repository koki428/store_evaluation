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
        <div class='stores'>
            @foreach ($stores as $store) 
            <div class='store'>
                <h2 class='store_name'>
                    <a href="/stores/{{ $store->id }}">{{ $store->name }}</a>
                </h2>
                <p>ジャンル：{{ $store->genre }}</p>
                <p>住所：{{ $store->address }}</p>
                <p>電話番号：{{ $store->tell }}</p>
                <p>最寄駅：{{ $store->station }}</p>
                <p>予算：{{ $store->budget }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>