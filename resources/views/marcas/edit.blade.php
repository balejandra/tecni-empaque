@extends('layouts.app')
@section('title')
    Marca
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Editar Marca</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('marcas.index') }}"  class="btn btn-primary">Atrás</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($marca, ['route' => ['marcas.update', $marca->id], 'method' => 'patch', 'files' => true]) !!}
                                        <div class="row">
                                            <!-- Nombre Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('nombre', 'Nombre:') !!}
                                                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                            </div>

                                            <!-- Foto Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('foto', 'Logo:') !!}
                                                {!! Form::file('foto',['class' => 'form-control']) !!}
                                                <img src="{{asset('images/marcas/'.$marca->foto)}}" alt="Sin foto" style="width: 20% !important;">
                                            </div>
                                            <div class="clearfix"></div>

                                            <!-- Submit Field -->
                                            <div class="form-group col-sm-12">
                                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                                <a href="{{ route('marcas.index') }}" class="btn btn-light">Cancelar</a>
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
