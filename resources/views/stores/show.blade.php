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
            <div class="image">
                <img src="{{ $store->image_url }}">
            </div>
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
            <div id="map" style="height:400px; width:600px"></div>
            <script>const point = @json($store->address)</script>
            <script type="text/javascript">　//マップを表示
            function initMap() {
                var target = document.getElementById('map'); 
                var address = point;
                var geocoder = new google.maps.Geocoder();  

                geocoder.geocode({ address: address }, function(results, status){
                    if (status === 'OK' && results[0]){

                    console.log(results[0].geometry.location);

                    var map = new google.maps.Map(target, {  
                        center: results[0].geometry.location,
                        zoom: 18
                    });

                    var marker = new google.maps.Marker({
                        position: results[0].geometry.location,
                        map: map,
                        animation: google.maps.Animation.DROP
                    });

                    }else{ 
                    //住所が存在しない場合の処理
                    alert('住所が正しくないか存在しません。');
                    target.style.display='none';
                    }
                });
            }
            </script>
            <script async defer
	            src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyBgS57G9eQaTG16CwXb9rZfTXYLlOJHv6c&callback=initMap">
	        </script>
            <div class="station">
                <h3>最寄駅</h3>
                <p>{!! nl2br(e($store->station)) !!}</p>
            </div>
            <div class="parking">
                <h3>駐車場</h3>
                <p>{!! nl2br(e($store->parking)) !!}</p>
            </div>
        </div>
    </body>
</html>