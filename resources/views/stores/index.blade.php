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
                <p>評価：{{ $store->average }}</p>
                <p>ジャンル：{{ $store->genre }}</p>
                <p>住所：{{ $store->address }}</p>
                <p>予算：{{ $store->budget }}</p>
            </div>
            @endforeach
        </div>
        <a href='/stores/create'>店舗登録</a>
        <div class='paginate'>
            {{ $stores->links('pagination::bootstrap-4') }}
        </div>
    </body>
</html>