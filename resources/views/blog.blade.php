@extends('template')
@section('konten')


    <div class="jumbotron jumbotron-fluid bg-cover"
        style="background-image: url({{ asset('img/banner/bradcam3.png') }});">
        <div class="container text-center" style="margin-top: 80px;">
            <h1 class="display-4 text-white" id="hero-text">Blog Pesawaran</h1>
            <p class="lead text-white d-inline-block">Indonesia Itu Indah, <br />Mari kita Ketempat yang Belum Pernah
                Kita Kunjungi.</p>
            <button type="button" class="mx-auto d-block btn btn-warning btn-lg">Explore Now</button>
        </div>
    </div>

    <section class="section-populer-beach">
        <div class="container">
            <p class="text-uppercase font-raleway mb-1 text-warning">Where To Go</p>
            <h3 class="mb-4">Populer Blog</h3>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/pantai/pahawang.jpg') }}" alt="Pahawang"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pahawang Beach</h5>
                        <p class="card-text text-muted">
                            This is a wider
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/pantai/ringgung2.jpg') }}" alt="Card image cap"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ringgung Beach</h5>
                        <p class="card-text text-muted">
                            This is a wider card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/pantai/pantaiclara.jpg') }}" alt="Card image cap"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Klara Beach</h5>
                        <p class="card-text text-muted">
                            This is a wider card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection