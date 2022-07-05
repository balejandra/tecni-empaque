@extends('layouts.web')
@section('menu')
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('assets/images/logos/logo.png')}}" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ Request::is('/*') ? 'active' : '' }}" href="{{route('home')}}">Inicio</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('nosotros*') ? 'active' : '' }}" href="{{route('nosotros')}}">Nosotros</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('servicios*') ? 'active' : '' }}" href="{{route('servicios')}}">Servicios</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('producto*') ? 'active' : '' }}" href="{{route('producto.index')}}">Productos</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('contacto*') ? 'active' : '' }}" href="{{route('contacto')}}">Contacto</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

@endsection
@section('content')
  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{$portafolio->nombre}}</h2>
          <ol>
            <li><a href="{{route('producto.index')}}">Productos</a></li>
            <li>Detalle</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

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

              <p>{{$portafolio->descripcion}}</p>
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
