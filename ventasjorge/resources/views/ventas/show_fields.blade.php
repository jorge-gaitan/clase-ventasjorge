<!-- Precio Field -->
<div class="col-sm-12">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $ventas->precio }}</p>
</div>

<!-- Productos Field -->
<div class="col-sm-12">
    {!! Form::label('productos', 'Productos:') !!}
    <p>{{ $ventas->productos }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ventas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ventas->updated_at }}</p>
</div>

