<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="./../../css/star.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Store detail</title>
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .star-rating {
              position: relative;
              font-size: 30px;
            }
            
            .star-rating::before,
            .star-rating::after {
              content: "★★★★★";
              color: #e1e1e1;
              position: absolute;
              top: 0;
              left: 0;
            }
            
            .star-rating::after {
              color: #ffdb58;
              overflow: hidden;
            }
            
            
            <?php
                for ($i=0; $i <= 50; $i++) {
                    echo "[data-rate='".(0.1*$i)."']::after {\n";
                    echo "width:" .(3*$i)."px;\n";
                    echo "}\n";
                }
            ?>
        </style>
    </head>
    <body>
        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="/" class="navbar-brand"><h1 class="text-primary display-6"><font color="green">Website Title</font></h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/" class="nav-item nav-link active">トップページ</a>
                            <a href="/stores/show_all" class="nav-item nav-link active">店舗一覧</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="col-Auto container py-5">
            <div class="container py-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="text-white bg-success px-1 py+2 rounded position-absolute">{{ $store->genre }}</div>
                    <h1 class="title py-4">
                        {{ $store->name }} &emsp; <span class="star-rating py-1" data-rate="{{ $store->average }}"></span>
                    </h1>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded">
                            <img src="{{ $store->image_url1 }}" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                        </div>
                        <div class="carousel-item rounded">
                            <img src="{{ $store->image_url2 }}" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                        </div>
                        <div class="carousel-item rounded">
                            <img src="{{ $store->image_url3 }}" class="img-fluid w-100 h-100 rounded" alt="Third slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class='evaluation py-1'>
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>評価</b><p style='font-size : 16px'>(評価0の場合は該当サイトに記載がない場合も含む)</p></h3>
                        <p style="font-size : 18px"><b>平均　{{ $store->average }}</b> &emsp; <span class="star-rating py-1" data-rate="{{ $store->average }}"></span></p>
                        <p>ホットペッパー　{{ $store->hotpeppar }} &emsp; <span class="star-rating py-1" data-rate="{{ $store->hotpeppar }}"></span></p>
                        <p>食べログ　{{ $store->tabelog }} &emsp; <span class="star-rating py-1" data-rate="{{ $store->tabelog }}"></span></p> 
                        <p>Google　{{ $store->google }} &emsp; <span class="star-rating py-1" data-rate="{{ $store->google }}"></span></p>
                    </div>
                </div>
                <div class="genre py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>ジャンル</b></h3>
                        <p>{!! nl2br(e($store->genre)) !!}</p>
                    </div>
                </div>
                <div class="time py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>営業時間</b></h3>
                        <p>{!! nl2br(e($store->time)) !!}</p>
                    </div>
                </div>
                <div class="close py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>定休日</b></h3>
                        <p>{!! nl2br(e($store->close)) !!}</p>
                    </div>
                </div>
                <div class="budget py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>予算</b></h3>
                        <p>{!! nl2br(e($store->budget)) !!}</p>
                    </div>
                </div>
                <div class="pay py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>支払い方法</b></h3>
                        <p>{!! nl2br(e($store->pay)) !!}</p> 
                    </div>
                </div>
                <div class="tell py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>電話番号</b></h3>
                        <p>{!! nl2br(e($store->tell)) !!}</p>
                    </div>
                </div>
                <div class="address py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>住所</b></h3>
                        <p>{!! nl2br(e($store->address)) !!}</p>
                        <div class="col-Auto">
                            <div id="map" style="width:700px; height:400px"></div>
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
    	                </div>
	                </div>
	            </div>
                <div class="station py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>最寄駅</b></h3>
                        <p>{!! nl2br(e($store->station)) !!}</p>
                    </div>
                </div>
                <div class="parking py-1">
                    <div class="p-4 border border-secondary border-top rounded-bottom">
                        <h3><b>駐車場</b></h3>
                        <p>{!! nl2br(e($store->parking)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">サイト内リンク</h4>
                            <a class="btn-link" href="/">トップページ</a>
                            <a class="btn-link" href="/stores/name_index">店名で検索</a>
                            <a class="btn-link" href="/stores/genre_index">ジャンルで検索</a>
                            <a class="btn-link" href="/stores/address_index">住所で検索</a>
                            <a class="btn-link" href="/stores/show_all">店舗一覧</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">管理</h4>
                            <a class="btn-link" href="/stores/create">管理者ページ</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">お問合せ</h4>
                            <p>Email: Example@gmail.com</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Footer End -->
        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>