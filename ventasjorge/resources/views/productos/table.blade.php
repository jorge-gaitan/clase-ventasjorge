<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $productos)
                <tr>
                    <td>{{ $productos->codigo }}</td>
                    <td>{{ $productos->nombre }}</td>
                    <td>{{ $productos->descripcion }}</td>
                    <td>{{ $productos->cantidad }}</td>
                    <td>{{ $productos->precio }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['productos.destroy', $productos->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('productos.show', [$productos->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('productos.edit', [$productos->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn
                            btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro que quieres borrar la entrada?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
