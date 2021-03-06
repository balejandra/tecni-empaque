<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripción:') !!}
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
    {!! Form::file('foto_principal',['class'=>'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- Foto 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_2', 'Foto 2:') !!}
    {!! Form::file('foto_2',['class'=>'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- Foto 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_3', 'Foto 3:') !!}
    {!! Form::file('foto_3',['class'=>'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    {!! Form::select('categoria_id', $categorias, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-light">Cancelar</a>
</div>
