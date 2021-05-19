<div class="card">

        <div class="card-body">
            <table class="table table-striped table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Identificador</th>
                        <th>Tipo de Cuadrante</th>
                        <th colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                          <td width="10px">{{$type->id}}</td>
                          <td>{{$type->name}}</td>
                          <td width="10px">
                           <a class="btn btn-sm" href="{{route('admin.types.edit',$type)}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td width="10px">
                            <form action="{{route('admin.types.destroy',$type)}}" method="POST">
                                @csrf 
                                @method('delete')
                            <button type="submit" class="btn btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            {{$types->links()}}
        </div>
</div>
