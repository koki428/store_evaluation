<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Store detail</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $store->name }} 平均評価{{ $store->average }}
            <h3>ジャンル : {{ $store->genre }}</h3>
        </h1>
         <div class='evaluation'>
                <p>ホットペッパー　{{ $store->hotpeppar }}</p>
                <p>食べログ　{{ $store->tabelog }}</p>
                <p>Google　{{ $store->google }}</p>
            </div>
        <div class="store_detail">
            <div class="time">
                <h3>営業時間</h3>
                <p>{!! nl2br(e($store->time)) !!}</p>
            </div>
            <div class="close">
                <h3>定休日</h3>
                <p>{!! nl2br(e($store->close)) !!}</p>
            </div>
            <div class="budget">
                <h3>予算</h3>
                <p>{!! nl2br(e($store->budget)) !!}</p>
            </div>
            <div class="pay">
                <h3>支払い方法</h3>
                <p>{!! nl2br(e($store->pay)) !!}</p>    
            </div>
            <div class="tell">
                <h3>電話番号</h3>
                <p>{!! nl2br(e($store->tell)) !!}</p>
            </div>
            <div class="address">
                <h3>住所</h3>
                <p>{!! nl2br(e($store->address)) !!}</p>
            </div>
            <div class="station">
                <h3>最寄駅</h3>
                <p>{!! nl2br(e($store->station)) !!}</p>
            </div>
            <div class="parking">
                <h3>駐車場</h3>
                <p>{!! nl2br(e($store->parking)) !!}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>