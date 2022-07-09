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

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Contraseña:') !!}
    <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':''}}" name="password" placeholder="Contraseña">
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'Confirmacion Contraseña:') !!}
    <input type="password" name="password_confirmation" class="form-control"
           placeholder="Confirmar Contraseña">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-light">Cancelar</a>
</div>
