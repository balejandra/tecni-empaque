@extends('layouts.app')
@section('title')
    Usuarios
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Editar Usuario</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('users.index') }}"  class="btn btn-primary">Atrás</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}
                                        <div class="row">
                                            <!-- Nombres Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('nombres', 'Nombres:') !!}
                                                {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
                                            </div>

                                            <!-- Email Field -->
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('email', 'Email:') !!}
                                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <!-- Submit Field -->
                                            <div class="form-group col-sm-12">
                                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                                <a href="{{ route('users.index') }}" class="btn btn-light">Cancelar</a>
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
