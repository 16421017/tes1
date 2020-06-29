<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pesona Pesawaran</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@300;400;600&display=swap"
        rel="stylesheet">

    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="#">Pesona Pesawaran</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto text-uppercase">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('beach')}}">Beach</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mountain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trip Packages</a>
                    </li>
                </ul>
                <a class="nav-item nav-link text-uppercase" href="#">Login</a>
            </div>
        </div>
    </nav>


<section class="section">
   @yield('konten')
   </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Pesona Pesawaran</h5>
                    <p class="text-muted">
                        All Rights Reserved by
                        <span class="text-warning">Pesona Pesawaran</span>
                        Copyright 2020
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="footer-socmed">
                        <img src="{{ asset('/img/social-media/instagram.png') }}" alt="Instagram">
                        <img src="{{ asset('/img/social-media/facebook.png') }}" alt="Facebook">
                        <img src="{{ asset('/img/social-media/twitter.png') }}" alt="Twitter">
                    </div>

                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
