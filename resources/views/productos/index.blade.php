@extends('layouts.app')
@section('title')
    Productos
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Productos</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('productos.create')}}" class="btn btn-primary form-btn">Nuevo <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('productos.table')
            </div>
       </div>
   </div>

    </section>
@endsection

