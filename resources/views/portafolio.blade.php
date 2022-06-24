@extends('layouts.web')

@section('content')
    <div id="scroll2"class="hero-container">
        <div class="hero1" style="background-image: url('{{asset('assets/images/portafolio/fondos/2947990.png')}}')">
        </div>
        <div class="hero-text">
            <h1><b>PRODUCTOS</b></h1>
        </div>
    </div>
    <section class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todos</li>
                        <li data-filter=".filter-empaque">Empaque</li>
                        <li data-filter=".filter-lubricantes">Lubricantes</li>
                        <li data-filter=".filter-electrico">Electrico</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

                <div class="col-lg-4 portfolio-wrap filter-empaque">
                    <div class="portfolio-item">
                        <img src="{{asset('assets/images/portafolio/productos/med-1921-hg_1.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Empaque</h3>
                            <div>
                                  <a href="{{route('portafolioDetalle')}}" title="Detalle Empaque"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-wrap filter-lubricantes">
                    <div class="portfolio-item">
                        <img src="{{asset('assets/images/portafolio/productos/84216_20210901171440.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h3>Aceite</h3>
                            <div>
                                 <a href="#" title=""><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-wrap filter-electrico">
                    <div class="portfolio-item">
                        <img src="{{asset('assets/images/portafolio/productos/BUJIA-IRIDIO.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h3>Bujia</h3>
                            <div>
                                  <a href="#" title=""><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-wrap filter-card">
                    <div class="portfolio-item">
                        <img src="{{asset('assets/images/portafolio/productos/filtro_aire.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h3>Filtro de Aire</h3>
                            <div>
                                 <a href="#" title=""><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-wrap filter-web">
                    <div class="portfolio-item">
                        <img src="{{asset('assets/images/portafolio/productos/kitdedistribucion.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h3>Kit de Distribucion</h3>
                            <div>
                                 <a href="#" title=""><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-wrap filter-app">
                    <div class="portfolio-item">
                        <img src="{{asset('assets/images/portafolio/productos/manguera_superior_.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h3>Manguera Superior</h3>
                            <div>
                                 <a href="#" title=""><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4  portfolio-wrap filter-card">
                    <div class="portfolio-item">
                        <img src="{{asset('assets/images/portafolio/productos/h-preview.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h3>Kit de Embrague</h3>
                            <div>
                                <a href="#" title=""><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->
    @endsection
