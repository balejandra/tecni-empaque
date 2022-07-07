@extends('layouts.web')

@section('content')

    <div class="hero-port hero-single route bg-image"
         style="background-image: url({{asset('assets/images/portafolio/fondos/mecanica.jpg')}})">
        <div class="overlay-mf"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="hero-title mb-4">Detalle</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="{{route('producto.index')}}">Productos</a>
                        </li>
                        <li class="breadcrumb-item active">{{$portafolio->nombre}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{asset('images/productos/'.$portafolio->foto_principal)}}" alt="">
                                </div>
                                @if ($portafolio->foto_2)
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/productos/'.$portafolio->foto_2)}}" alt="">
                                    </div>
                                @endif
                                @if ($portafolio->foto_3)
                                    <div class="swiper-slide">
                                        <img src="{{asset('images/productos/'.$portafolio->foto_3)}}" alt="">
                                    </div>
                                @endif
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Información</h3>
                            <ul>
                                <li><strong>Categoria</strong>: {{$portafolio->categoria->nombre}}</li>
                                <li><strong>Marca</strong>: {{$portafolio->marca}}</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>{{$portafolio->nombre}}</h2>
                            <p>
                                {{$portafolio->descripcion}}
                            </p>
                            <section class="share3 cid-t7CcgRbypL">
                                <div class="container">
                                    <div class="media-container-row">
                                        <div class="col-12">
                                            <h3 class="mbr-section-title align-center mb-3 mbr-fonts-style display-6">
                                                <strong>Haz tu pedido!!!</strong></h3>
                                            <div class="social-list align-center">

                                                <a class="iconfont-wrapper bg-facebook m-2 " target="_blank" href="#">
                                        <span class="socicon-facebook socicon">
                                            <i class="fa-brands fa-whatsapp"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @section('whatsapp')

                        @endsection
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

@endsection
