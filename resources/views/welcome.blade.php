@extends('template')
@section('konten')


    <div class="jumbotron jumbotron-fluid bg-cover"
        style="background-image: url({{ asset('img/pantai/beach.jpeg') }});">
        <div class="container text-center" style="margin-top: 80px;">
            <h1 class="display-4 text-white" id="hero-text">Wonderful Pesawaran</h1>
            <p class="lead text-white d-inline-block">Indonesia Itu Indah, <br />Mari kita Ketempat yang Belum Pernah
                Kita Kunjungi.</p>
            <button type="button" class="mx-auto d-block btn btn-warning btn-lg">Explore Now</button>
        </div>
    </div>

    <section class="section-about">
        <div class="container text-center">
            <h3 class="mb-4">Who We Are?</h3>
            <p class="text-muted font-weight-light">
                Kabupaten Pesawaran merupakan daerah penyangga Ibu kota Provinsi Lampung. Secara keseluruhan luas
                wilayah
                Kabupaten Pesawaran adalah 1.173,77 km2 atau 117.377 Ha dengan Kecamatan Padang Cermin sebagai kecamatan
                terluas, yaitu 31.763 Ha. Dari luas keseluruhan Kabupaten Pesawaran tersebut, 13.121 Ha digunakan
                sebagai
                lahan sawah, sedangkan sisanya yaitu 104.256 Ha merupakan lahan bukan sawah dan lahan bukan pertanian.
                Jenis
                penggunaan lahan sawah yang terbanyak adalah irigasi tehnis dengan dua kali penanaman padi dalam
                setahun.
                Sedangkan jenis penggunaan lahan bukan sawah yang terbanyak adalah hutan negara.
            </p>
        </div>
    </section>

    <section class="section-populer-beach">
        <div class="container">
            <p class="text-uppercase font-raleway mb-1 text-warning">Where To Go</p>
            <h3 class="mb-4">Populer Beach</h3>
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

    <section class="section-populer-mountain">
        <div class="container">
            <p class="text-uppercase font-raleway mb-1 text-warning">Where To Go</p>
            <h3 class="mb-4">Populer Mountain</h3>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/gunung/gunungg.jpg') }}" alt="Rajawali"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Rajawali</h5>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/gunung/gunung1.jpg') }}" alt="Betung"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Betung</h5>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/gunung/gunung2.jpg') }}" alt="Pesawaran"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Pesawaran</h5>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{ asset('/img/gunung/gunung3.jpg') }}" alt="Sukmahilang"
                        style="height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Sukmahilang</h5>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

@endsection