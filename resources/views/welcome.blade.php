@extends('layouts.app')


@section('content')

<div id="slider">
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
            <li data-target="#headerSlider" data-slide-to="1"></li>
        </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="img/pasar1.jpg">
        </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/pasar2.jpg">
            </div>
        </div>
        <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    <!-- About -->
    <section id="about">
        <div class="container-about">
            <div class="row">
                <div class="left col-md-5 text-center">
                    <h1>Solusi untuk membantu</h1>
                    <h1>membawa barang</h1>
                    <h1>belanja anda</h1>
                </div>

                <div class="right col-md-5">
                    <p>Tepat Waktu</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%">100%</div>
                    </div>
                    <p>Aman</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%">100%</div>
                    </div>
                    <p>Terpercaya</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%">100%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('layouts.footer')

@endsection
