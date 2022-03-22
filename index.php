<?php
include "config/info.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OVERRATED</title>

    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Local CSS -->
    <link rel="stylesheet" href="assets/styles/style.css">

</head>

<body>
    <!-- Navigation Bar Start -->
    <header class="navbar bg-warna-nav container-fluid position-fixed fixed-top" style="padding-left: 10%; padding-right: 5%;">
        <div>
            <a class="nav-item; nav-link; mx-2; fw-bolder; fs-3" alt="logo" style="width: 50%; text-decoration: none;" href="#"><img src="assets/images/logo.svg" alt="Logo Overrated"></a>
        </div>
        <div>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item"><a class="mx-4 nav-link" style="text-decoration: none;" href="#">Home</a></li>
                <li class="nav-item"><a class="mx-4 nav-link" style="text-decoration: none;" href="#search">Search</a>
                </li>
                <li class="nav-item"><a class="mx-4 nav-link" style="text-decoration: none;" href="#popular">Populars</a></li>
                <li class="nav-item"><a class="mx-4 nav-link" style="text-decoration: none;" href="#playing">Now Playing</a></li>
            </ul>
        </div>
    </header>
    <!-- Navigation Bar End -->

    <!-- Header Start -->
    <section class="container-fluid bg-warna-header" style="padding-left: 10%; padding-right: 5%; width: 100%;">
        <div class="container-fluid" style="padding-top: 10%;">
            <div class="row">
                <h1>Welcome to OVERRATED Website</h1> &nbsp;
                <h4>Find your favourite movie rating here. Explore now or never!</h4>
            </div>

            <!-- Caraousel Start -->
            <div class="container; carousel-container py-5">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/thumbnails/endgame-thumb.webp" class="rounded mx-auto d-block" style="width: 100%;" alt="...">
                            <div class="carousel-caption d-none d-sm-flex align-items-end">
                                <img src="assets/images/poster/endgame.jpg" class="rounded float-start d-flex" style="width: 25%;" alt="...">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="">
                                    <h4>"Avengers Endgame"</h4>
                                    <p>10/10</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/thumbnails/suicidesquad-thumb.jpg" class="rounded mx-auto d-block" style="width: 100%;" alt="...">
                            <div class="carousel-caption d-none d-sm-flex align-items-end">
                                <img src="assets/images/poster/suicidesquad.jpg" class="rounded float-start d-flex" style="width: 25%;" alt="...">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="">
                                    <h4>"Suicide Squad"</h4>
                                    <p>9.5/10</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/thumbnails/F9-thumb.jpg" class="rounded mx-auto d-block" style="width: 100%;" alt="...">
                            <div class="carousel-caption d-none d-sm-flex align-items-end">
                                <img src="assets/images/poster/F9.jpg" class="rounded float-start d-flex" style="width: 25%;" alt="...">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="">
                                    <h4>"F9: The Fast Saga"</h4>
                                    <p>9.8/10</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->

        </div>
    </section>
    <!-- Header End -->

    <!-- Section Search -->
    <section id="search">
        <div class="container-fluid m-0 p-5">
            <div class="row d-flex flex-row align-items-center">
                <div class="col-9 px-4">
                    <div class="row py-2">
                        <div class="col">
                            <h2>Search Movies</h2>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col">
                            <input class="form-control form-control-lg" type="text" name="search" placeholder="Type the keyword here..." aria-label=".form-control-lg example">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img class="illustration" src="assets/images/illustrations/illustration_search.svg" alt="Illustration Search">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Popular -->
    <section id="popular">
        <div class="container-fluid" style="background-color: #2D3643;">
            <h2 class="p-5 text-center">Popular Movies</h2>
            <div class="d-flex justify-content-center flex-wrap py-5">
                <?php
                include_once "api/api_popular.php";
                foreach ($popular->results as $p) {
                    echo '<div class="card mx-3 my-2"><a href="#"><img src="' . $imgurl_1 . '' . $p->poster_path . '" alt="Movie Poster"><div class="card-img-overlay"></div></a><h6 class="text-center py-2">' . $p->original_title . '</h4></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section Now Playing -->
    <section id="playing">
        <div class="container-fluid" style="background-color: #2D3643;">
            <h2 class="p-5 text-center">Now Playing</h2>
            <div class="d-flex justify-content-center flex-wrap py-5">
                <?php
                include_once "api/api_now.php";
                foreach ($nowplaying->results as $n) {
                    echo '<div class="card mx-3 my-2"><a href="#"><img src="' . $imgurl_1 . '' . $n->poster_path . '" alt="Movie Poster"><div class="card-img-overlay"></div></a><h6 class="text-center py-2">' . $n->original_title . '</h4></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer class="bg-warna-nav">
        <section class="">
            <div class="container text-center text-md-start pt-4">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Logo
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam obcaecati reiciendis enim
                            laboriosam sequi
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Page
                        </h6>
                        <p>
                            <a href="#home" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="#search" class="text-reset">Search</a>
                        </p>
                        <p>
                            <a href="#kriteria" class="text-reset">Kriteria</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Social Media
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">
                                <i class="fa fa-instagram" aria-hidden="true"> Instagram</i>
                            </a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">
                                <i class="fa fa-facebook" aria-hidden="true"> Facebook</i>
                            </a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">
                                <i class="fa fa-youtube" aria-hidden="true"> Youtube</i>
                            </a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">
                                <i class="fa fa-whatsapp" aria-hidden="true"> Whatsapp</i>
                            </a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">
                                <i class="fa fa-telegram me-3"> +62981847321234 </i>
                            </a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fa fa-home me-3"></i> Jl. Kebenaran, no.75, United Kingdom</p>
                        <p>
                            <i class="fa fa-envelope me-3"></i>kingdom@gmail.com
                        </p>
                        <p><i class="fa fa-phone me-3"></i> +6298712456832</p>
                    </div>

                </div>

            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            <p> © 2021 Copyright:
                <a class="text-reset fw-bold" href="#!">Group 2</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap 5.1.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>