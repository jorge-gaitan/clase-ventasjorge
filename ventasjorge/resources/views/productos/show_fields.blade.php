<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $producto->nombre }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('descripcion', 'descripcion:') !!}
    <p>{{ $producto->descripcion }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $producto->cantidad }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('codigo', 'codigo:') !!}
    <p>{{ $producto->codigo }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('precio', 'precio:') !!}
    <p>{{ $producto->precio }}</p>
</div>
