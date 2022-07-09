@extends('layouts.app')
@section('title')
    Producto
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Editar Producto</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('productos.index') }}"  class="btn btn-primary">Atrás</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'patch', 'files' => true]) !!}
                                        <div class="row">
                                            <!-- Nombre Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('nombre', 'Nombre:') !!}
                                                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                            </div>

                                            <!-- Descripcion Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('descripcion', 'Descripcion:') !!}
                                                {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                                            </div>

                                            <!-- Marca Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('marca', 'Marca:') !!}
                                                {!! Form::text('marca', null, ['class' => 'form-control']) !!}
                                            </div>

                                            <!-- Foto Principal Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('foto_principal', 'Foto Principal:') !!}
                                                <img src="{{asset('images/productos/'.$producto->foto_principal)}}" alt="Sin foto" style="width: 20% !important;">
                                                {!! Form::file('foto_principal',['class' => 'form-control']) !!}
                                            </div>
                                            <div class="clearfix"></div>

                                            <!-- Foto 2 Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('foto_2', 'Foto 2:') !!}
                                                <img src="{{asset('images/productos/'.$producto->foto_2)}}" alt="Sin foto" style="width: 20% !important;">
                                                {!! Form::file('foto_2',['class' => 'form-control']) !!}
                                            </div>
                                            <div class="clearfix"></div>

                                            <!-- Foto 3 Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('foto_3', 'Foto 3:') !!}
                                                <img src="{{asset('images/productos/'.$producto->foto_3)}}" alt="Sin foto" style="width: 20% !important;">
                                                {!! Form::file('foto_3',['class' => 'form-control']) !!}
                                            </div>
                                            <div class="clearfix"></div>

                                            <!-- Categoria Id Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('categoria_id', 'Categoria Id:') !!}
                                                {!! Form::select('categoria_id', $categoria,null, ['class' => 'form-control']) !!}
                                            </div>

                                            <!-- Submit Field -->
                                            <div class="form-group col-sm-12">
                                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                                <a href="{{ route('productos.index') }}" class="btn btn-light">Cancelar</a>
                                            </div>

                                        </div>

                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
