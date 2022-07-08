@extends('layouts.web')

@section('content')
    @push('scripts')
        <link rel="stylesheet" href="{{asset('assets/gasket/normalize.min.css')}}">
        <script src="{{asset('assets/gasket/prefixfree.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('assets/gasket/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
        <script src="{{asset('assets/js/swiper.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
        @endpush
    <div class="demo-cont">

        <!-- slider start -->
        <div class="fnc-slider example-slider">
            <div class="fnc-slider__slides">
                <!-- slide start -->
                <div class="fnc-slide m--blend-white m--active-slide">
                    <div class="fnc-slide__inner">
                        <div class="outer fnc-slide__mask fnc-slide__mask-inner">
                            <div class="inner"></div>
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                            <div class="dot4"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>Área</span>
                                </div>
                                <div class="fnc-slide__heading-line">
                                    <span>Automotriz</span>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-red">
                    <div class="fnc-slide__inner">

                        <div class="outer fnc-slide__mask fnc-slide__mask-inner">
                            <div class="inner"></div>
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                            <div class="dot4"></div>
                        </div>

                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>Variedad</span>
                                </div>
                                <div class="fnc-slide__heading-line">
                                    <span>Productos</span>
                                </div>
                            </h2>

                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-dark">
                    <div class="fnc-slide__inner">
                        <div class="outer fnc-slide__mask fnc-slide__mask-inner">
                            <div class="inner"></div>
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                            <div class="dot4"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>Innovadores</span>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-blue">
                    <div class="fnc-slide__inner">
                        <div class="outer fnc-slide__mask fnc-slide__mask-inner">
                            <div class="inner"></div>
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="dot3"></div>
                            <div class="dot4"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>Expertos en</span>
                                </div>
                                <div class="fnc-slide__heading-line">
                                    <span>Empaques</span>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- slide end -->
            </div>
            <nav class="fnc-nav">
                <div class="fnc-nav__bgs">
                    <div class="fnc-nav__bg m--navbg-white m--active-nav-bg"></div>
                    <div class="fnc-nav__bg m--navbg-red "></div>
                    <div class="fnc-nav__bg m--navbg-dark"></div>
                    <div class="fnc-nav__bg m--navbg-blue"></div>
                </div>
                <div class="fnc-nav__controls">
                    <button class="fnc-nav__control">
                        Automotriz
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        Variedad
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        Innovadores
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        Empaques
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                </div>
            </nav>
        </div>
        <!-- slider end -->

    </div>
    <div class="slider">
        <div class="slide-track">
            @foreach($marcas as $marca)
            <div class="slide">
                <img src="{{asset('images/marcas/'.$marca->foto)}}" class="slider-img" alt="{{$marca->nombre}}" />
            </div>
            @endforeach
        </div>
    </div>
    <section data-bs-version="5.1" class="image1 cid-t25K2PCcSh" id="image1-5">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5">
                    <div class="image-wrapper">
                        <img src="{{asset('assets/images/logos/logo.png')}}" alt="tecni-empaque">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper text-center">
                        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                            <h2>Sobre TECNI-EMPAQUE</h2>
                        </div>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Nos hemos desempeñado por  mas de 20 años como el principal proveedor de componentes de
                            Repuestos Automotrices. Conocidos por su innovación y mejora continua, y precios competitivos del mercado.
                        <div> <a class="cta-btn" href="#">Saber Más</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5.1" class="info1 cid-t25MnzwjsK" id="info1-c">


        <div class="container">
            <div class="row">
                <div class="col-12  text-center">
                    <h3 class="mbr-section-title mb-4 mbr-fonts-style display-3">Encuentra aquí los productos PEVISA</h3>

                    <div class="mbr-section-btn">
                        <a class="btn-fran" href="#">Productos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Nuestros Productos</h2>
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="carousel-gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($productos as $portafolio)
                        <div class="swiper-slide">
                            <a href="{{route('producto.show',[$portafolio->id])}}">
                                <div class="image" style="background-image: url({{asset('images/productos/'.$portafolio->foto_principal)}})">
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->
    <section id="team" class="team">
        <div class="container-fluid">

            <div class="section-title" data-aos="fade-in">
                <h2>Donde nos pueden encontrar</h2>
                <p>Estamos muy cerca de ti.</p>
            </div>

                <div class="row">
                    <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="{{asset('assets/images/home/tiendas/principal.png')}}" class="img-store-principal" alt=""></div>
                        <div class="member-info">
                            <h4>Sangolqui (Comercialización al por Mayor)</h4>
                            <span>Av. Antonio Tanzado y Calle B</span>
                            <div class="social">
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bx bx-phone-call"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="{{asset('assets/images/home/tiendas/sucursal1.1.png')}}" class="img-store" alt=""></div>
                        <div class="member-info">
                            <h4>Quito</h4>
                            <span>Av. 6 de diciembre N49-69 y de las Cucardas Sector la Luz</span>
                            <div class="social">
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bx bx-phone-call"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" >
                        <div class="pic"><img src="{{asset('assets/images/home/tiendas/sucursal2.png')}}" class="img-store" alt=""></div>
                        <div class="member-info">
                            <h4>Quito</h4>
                            <span>Calle de las Anonas y de los Nardos esq. diagonal al Centro de Colisiones Hyundai Av. Eloy Alfaro </span>

                            <div class="social">
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bx bx-phone-call"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="{{asset('assets/images/home/tiendas/sucursal3.png')}}" class="img-store" alt=""></div>
                        <div class="member-info">
                            <h4>Quito Sur</h4>
                            <span>Av. Mariscal Sucre S25-216 y S25f Taisha Sector Santa Rita</span>
                            <div class="social">
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bx bx-phone-call"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->
    <br>
    <section data-bs-version="5.1" class="info3 cid-t3j2O3oegX parallax mbr-parallax-background" id="info3-d">



        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(53, 53, 53);">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 quota title-overlay">
                    <h6 class="mbr-text align-center mb-4 display-2">
                        <strong>Variedad de Repuestos</strong>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Nuestros Proveedores</h2>
                <p>Confianza y Calidad</p>
            </div>

            <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/amc.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/fraco.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/permatex.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/pevisa.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/thg.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/yaco.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/versachem.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/royal.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('assets/images/home/proveedores/genoro.png')}}" class="img-fluid" alt=""></div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Clients Section -->

@endsection


