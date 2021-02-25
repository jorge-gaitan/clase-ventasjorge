<div class="table-responsive">
    <table class="table" id="ventas-table">
        <thead>
            <tr>
                <th>Precio</th>
                <th>Productos</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $ventas)
                <tr>
                    <td>{{ $ventas->precio }}</td>
                    <td>{{ $ventas->productos->nombre }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['ventas.destroy', $ventas->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('ventas.show', [$ventas->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('ventas.edit', [$ventas->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn
                            btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
