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
                <h2 class='store_name'>{{ $store->name }}</h2>
                <h3 class='address'>住所：{{ $store->address }}</h3>
                <h3 class='tell'>電話番号：{{ $store->tell }}</h3>
                <h3 class='station'>最寄駅：{{ $store->station }}</32>
                <h3 class='budget'>予算：{{ $store->budget }}</h3>
            </div>
            @endforeach
        </div>
    </body>
</html>