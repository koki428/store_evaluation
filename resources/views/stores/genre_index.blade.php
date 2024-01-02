<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>Website Name</title>
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    </head>
    <body>
        <!--ここからBootstrap-->
        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="/" class="navbar-brand"><h1 class="text-primary display-6"><font color="green">Average Rating of Restaurants</font></h1></a>
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

        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-Auto">
                        <div class="position-relative mx-auto">
                            <p>このページはジャンル名で検索できます</p>
                            <form action="/stores/genre_index/search_result" method="GET">
                                @csrf
                                <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="text" name="genre" placeholder="ジャンルで検索">
                                <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-70" style="top: 40%; right: 25%; background-color:green;" name="search">検索</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-Auto">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1702278903/eDJwZmM3MWFvaGllbTB0NnN0b2c=/grid_landscape" class="img-fluid w-100 h-100 bg-secondary rounded" alt="">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1702794987/MjUxODQ5MmY2ZjY1Mjg0ZWMxYmU3ZmJlMDIwYzczYjJfb3ZhZHdn/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704094944/MjM5NWI2OTVmODM1NmRlZjhkY2IyZDIxZDgzZTcyNzNfamdvYTlw/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704096297/OGY2YjEyMmFkOWRhNWJjZjkyMThjYWQyOTJlMmZmZGZfdnR1aTdr/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704096501/ZWZlMDcwODkxYTZmZGI2MmYyM2IxZTIwZjhmNjVhMzFfa2RpdHRv/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704098139/MTIzNjEwODEzX3VzeWdudQ==/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704096799/OWIxZjExZTU4ZGE3NWU5NzJkZjRiMGRjYTY2OTU4ZjhfZG1tbTl2/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704096949/MTMxNjg2MTM5X3FpcHNqcw==/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704097158/M2I5OWY0MWZiNmRiZWFiMTIwNTlkMjBiYjQ4N2JkZjBfY2RzdGl4/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704097452/NzhkNDkxNzE4ZDg4Yjg2NDRhOTIzNjM5ODJiODU5OTlfZWd2OGRn/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704097693/Mjg1ZTlkZTZlZTg2Y2RlMDJjMGQxNGFlMzUzN2Y2NDBfYXpmdTFr/grid_landscape" class="img-fluid w-100 h-100 rounded" alt="Second slide">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

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