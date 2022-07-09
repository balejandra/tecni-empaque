@extends('layouts.app')
@section('title')
    Categoria
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Detalles Categoria</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('categorias.index') }}"
                 class="btn btn-primary form-btn float-right">Atrás</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('categorias.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
