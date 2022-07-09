@extends('layouts.web')

@section('content')
    <div class="nonrect1">
    <section class="nonrect" style="background-image: url({{asset('assets/images/servicios/fondos/Auto-Parts.jpg')}});">

        <div  class="content">
            <h2>SERVICIOS</h2>
        </div>

    </section>
    </div>
        <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Te Ofrecemos</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="bx bx-car"></i></div>
                        <h4 class="title"><a>Repuestos Garantizados</a></h4>
                        <p class="description">Para el mejor Rendimiento de tu Vehículo </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a>Gran Variedad</a></h4>
                        <p class="description">Lo que Necesitas Nosotros lo Tenemos o te lo Conseguimos</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-store-alt"></i></div>
                        <h4 class="title"><a>Productos PEVISA</a></h4>
                        <p class="description">Somos Distribuidores Mayoritarios</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="bx bx-dollar-circle"></i></div>
                        <h4 class="title"><a>Precios Competitivos</a></h4>
                        <p class="description">Encuentra el Mejor Repuesto al Mejor Precio</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <video style="width:100%;max-height:100%" autoplay muted loop controls><source src="{{asset('assets/images/servicios/video/tecniempaque.mp4')}}" type="video/mp4"></video>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Nuestra Identidad</a></h4>
                        <p class="description">Una empresa importadora dedicada satisfacer las necesidades de nuestros clientes
                            brindando la comercialización y distribución de empaques y mangueras automotrices, además  disponemos
                            de una amplia variedad de productos en el área automotriz.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
        <div class="container">

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/servicios/detalles/bodega.png')}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Variedad de Productos</a></h5>
                            <p class="card-text">En nuestra bodega contamos con stock y variedad de repuestos, para satisfacer y apoyar a nuestros clientes.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/servicios/detalles/bodega1.png')}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Calidad Garantizada</a></h5>
                            <p class="card-text">En Tecni-Empaque somos la mejor solución para el mantenimiento de tu vehículo.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/servicios/detalles/gasket-replacing.jpg')}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Expertos en Empaques</a></h5>
                            <p class="card-text">Somos especialistas en la importacion y comercializacion de Empaques.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/servicios/detalles/productos.png')}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Brindamos</a></h5>
                            <p class="card-text">Empaques y repuestos en general para el mantenimiento de tu vehículo</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Service Details Section -->

    @endsection
