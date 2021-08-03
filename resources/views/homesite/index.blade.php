<!doctype html>

<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="{{asset('owl-carousel/assets/owl.carousel.min.css')}}" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>IvoireBanque - la banque du futur</title>
    <style>

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
    <div class="container"><a class="navbar-brand">IvoireBanque</a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
                <li class="nav-item"><a class="nav-link" href="#about">Apropos</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#news">News</a></li> -->
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="{{route('login')}}" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">connexion</a>
                <a href="{{route('register')}}" class="btn btn-info my-2 my-sm-0 text-uppercase">inscription
                </a>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1> A vos coté depuis toujours, <span>IvoireBanque</span> vous accompagne. </h1>
                <p> La banque du futur ... </p>
                <a href="{{route('register')}}">Nous rejoindre <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-md-6">
                <div class="card"><img class="card-img-top img-fluid" src="images/banner-img.png" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-feature" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cover">
                    <div class="card">
                        <svg
                                class="back-bg"
                                width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                            <defs>
                                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                        </svg>
                        <!-- *************-->

                        <svg width="100%" viewBox="0 0 700 500">
                            <clipPath id="clip-path">
                                <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                            </clipPath>
                            <!-- xlink:href for modern browsers, src for IE8- -->
                            <image clip-path="url(#clip-path)" xlink:href="images/learn-img.jpg" width="100%"
                                   height="465" class="svg__image"></image>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h2> Ivoire Banque  </h2>
                <p> Ivoire Banque est une banque mutualiste et universel qui tire sa force de la singularité de ses valeurs de solidarité et de mutualité marquées dans son organisation et de son fonctionnement unique en cote d'ivoire </p>
                <p>
                    <small> Ivoire Banque fonde son efficacité sur 1600 collaborateurs répartis dans 14 filiales actives dans les domaines de la Banque d’Affaires, de la Banque et des Assurances pour proposer des conseils en matière de financements et des solutions d’investissements en s’appuyant sur L’expertise et le savoir-faire de ses équipes.
                    </small>
                </p>
                <!-- <a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div> -->
        </div>
    </div>
</div>


<div class="container-fluid gtco-numbers-block">
    <div class="container">
        <svg width="100%" viewBox="0 0 1600 400">
            <defs>
                <linearGradient id="PSgrad_03" x1="80.279%" x2="0%"  y2="0%">
                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />

                </linearGradient>

            </defs>
            <!-- <clipPath id="clip-path3">

                                      </clipPath> -->

            <path fill-rule="evenodd"  fill="url(#PSgrad_03)"
                  d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>

            <clipPath id="ctm" fill="none">
                <path
                        d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>
            </clipPath>

            <!-- xlink:href for modern browsers, src for IE8- -->
            <image  clip-path="url(#ctm)" xlink:href="images/word-map.png" height="800px" width="100%" class="svg__image">

            </image>

        </svg>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">105025</h5>
                        <p class="card-text">Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">1600</h5>
                        <p class="card-text">collaborateurs</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">14</h5>
                        <p class="card-text">filiales</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">15</h5>
                        <p class="card-text">Pays</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-testimonials">
    <div class="container">
        {{-- <h2>What our customers say about us.</h2> --}}
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer1.jpg" alt="">
                    <div class="card-body">
                        <h5>Lisa Gally <br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer2.jpg" alt="">
                    <div class="card-body">
                        <h5>Missy Limana<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer3.jpg" alt="">
                    <div class="card-body">
                        <h5>Aana Brown<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer3.jpg" alt="">
                    <div class="card-body">
                        <h5>Aana Brown<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="container-fluid" id="gtco-footer">
    <br> <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-3" id="contact">
                <h4> Contactez nous </h4>
                <input type="text" class="form-control" placeholder="Full Name">
                <input type="email" class="form-control" placeholder="Email Address">
                <textarea class="form-control" placeholder="Message"></textarea>
                &nbsp; <a href="#" class="submit-button">Envoyé <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>

        </div>
        <div class="col-12">
            <p>&copy; 2021. Tout droit réservé. Design by Nucleus.</p>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- owl carousel js-->
<script src="{{asset('owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
