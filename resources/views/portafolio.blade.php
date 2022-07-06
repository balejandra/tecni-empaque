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
                        @foreach($categorias as $categoria)
                            <li data-filter=".{{$categoria}}">{{$categoria}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                @foreach($portafolios as $portafolio)
                <div class="col-lg-4 portfolio-wrap {{$portafolio->categoria->nombre}}">
                    <div class="portfolio-item">
                        <img src="{{env('RUTA_PRODUCTOS2').'images/productos/'.$portafolio->foto_principal}}" alt="">
                        <div class="portfolio-info">
                            <h3><a class="link-product" href="{{route('producto.show',[$portafolio->id])}}">{{$portafolio->nombre}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->
    @endsection
