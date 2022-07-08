<div class="table-responsive">
    <table class="table" id="marcas-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Nombre</th>
        <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($marcas as $marca)
            <tr>
                       <td>{{ $marca->id }}</td>
            <td>{{ $marca->nombre }}</td>
            <td>{{ $marca->foto }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['marcas.destroy', $marca->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('marcas.show', [$marca->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('marcas.edit', [$marca->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
