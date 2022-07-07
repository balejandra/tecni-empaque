@extends('layouts.web')

@section('content')
    <div id="scroll2"class="hero-container">
        <div class="hero1" style="background-image: url('{{asset('assets/images/portafolio/fondos/2947990.png')}}')">
        </div>
        <div class="hero-text">
            <h1><b>PRODUCTOS</b></h1>
        </div>
    </div>
    <section class="portfolio fondo-blue">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todos</li>
                        @foreach($categorias as $categoria)
                            <li data-filter=".{{$categoria->id}}">{{$categoria->nombre}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                @foreach($portafolios as $portafolio)
                <div class="col-md-4 portfolio-wrap {{$portafolio->categoria_id}}">
                    <div class="work-box">
                        <a href="{{route('producto.show',[$portafolio->id])}}">
                            <div class="work-img">
                                <img src="{{asset('images/productos/'.$portafolio->foto_principal)}}" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="w-title">{{$portafolio->nombre}}</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">{{$portafolio->categoria->nombre}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    @endsection
