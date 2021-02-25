<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Productos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productos', 'Productos:') !!}
    {!! Form::select('productos', $productos, null, ['class' => 'form-control custom-select']) !!}
</div>
