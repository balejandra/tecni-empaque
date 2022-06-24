<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Marca</th>
        <th>Foto Principal</th>
        <th>Foto 2</th>
        <th>Foto 3</th>
        <th>Categoria</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                       <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->marca }}</td>
            <td> <img src="{{asset('images/productos/'.$producto->foto_principal) }}" alt="Sin foto"
                      style="max-width: 200px;max-height: 60px">
            </td>
            <td><img src="{{asset('images/productos/'.$producto->foto_2) }}" alt="Sin foto"
                     style="max-width: 200px;max-height: 60px">
            </td>
            <td>
                <img src="{{asset('images/productos/'.$producto->foto_3) }}" alt="Sin foto"
                     style="max-width: 200px;max-height: 60px">
            </td>
            <td>{{ $producto->categoria->nombre }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('productos.show', [$producto->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('productos.edit', [$producto->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Seguro desea eliminar este registro ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
