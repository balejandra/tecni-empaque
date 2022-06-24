<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $producto->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $producto->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $producto->descripcion }}</p>
</div>

<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', 'Marca:') !!}
    <p>{{ $producto->marca }}</p>
</div>

<!-- Foto Principal Field -->
<div class="form-group">
    {!! Form::label('foto_principal', 'Foto Principal:') !!}
    <p> <img src="{{asset('images/productos/'.$producto->foto_principal) }}" alt="Sin foto"
             style="max-width: 800px;max-height: 660px"></p>
</div>

<!-- Foto 2 Field -->
<div class="form-group">
    {!! Form::label('foto_2', 'Foto 2:') !!}
    <p> <img src="{{asset('images/productos/'.$producto->foto_2) }}" alt="Sin foto"
             style="max-width: 800px;max-height: 660px"></p>
</div>

<!-- Foto 3 Field -->
<div class="form-group">
    {!! Form::label('foto_3', 'Foto 3:') !!}
    <p> <img src="{{asset('images/productos/'.$producto->foto_3) }}" alt="Sin foto"
             style="max-width: 800px;max-height: 660px"></p>
</div>

<!-- Categoria Id Field -->
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    <p>{{ $producto->categoria->nombre}}</p>
</div>

