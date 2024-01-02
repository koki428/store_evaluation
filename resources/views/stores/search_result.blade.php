<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>Result</title>
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .star-rating {
              position: relative;
              font-size: 20px;
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
                    echo "width:" .(2*$i)."px;\n";
                    echo "}\n";
                }
            ?>
        </style>
    </head>
    <body>
        <!--ここからBootstrap-->
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
                            <a href="/" class="nav-item nav-link active">店舗一覧</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
        
        <!-- Fruits Shop Start-->
        <div class="container py-5">
            <div class="container py-5">
                <div class="container py-5">
                    <div class="tab-class text-center">
                        <div class="row g-4">
                            <div class="col-Auto">
                                <div class="row g-4">
                                    <div class="col-Auto">
                                        <div class="rounded position-relative fruite-item">
                                            @foreach ($stores as $store)
                                            <div class="p-3 border border-success border-top rounded-bottom">
                                                <div class="text-white bg-success px-2 py-1 rounded position-absolute">{{ $store->genre }}</div>
                                                    <div class="fruite-img">
                                                        <img src="{{ $store->image_url1 }}" class="img-fluid w-50 py-5 rounded-position-absolute" alt="">
                                                    </div>
                                                    <h4 style="font-size:160%"><a href="/stores/{{ $store->id }}">{{ $store->name }}</a></h4>
                                                    <p style="font-size:120%">評価：{{ $store->average }} &emsp; <span class="star-rating py-1" data-rate="{{ $store->average }}"></span></p>
                                                    <p style="font-size:120%">住所：{{ $store->address }}</p>
                                                    <p style="font-size:120%">予算：{{ $store->budget }}</p>
                                                </div>
                                                @endforeach
                                                <div class="footer">
                                                    <a href="/">戻る</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->
        
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
                            <a class="btn-link" href="">店舗一覧</a>
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