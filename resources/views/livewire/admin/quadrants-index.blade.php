<div class="card">
    <div>
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el número ó nombre del cuadrante">
        </div>
    

     @if ($quadrants->count())
     
        <div class="card-body table-responsive">
            <table class="table table-striped table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Cuadrannte</th>
                        <th>Tipo</th>
                        <th>Eje</th>
                        <th>Municipio</th>
                        <th>Organismo</th>
                        <th>Responsable</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($quadrants as $quadrant)
                     <tr>
                        <td>{{$quadrant->id}}</td>
                        <td>{{$quadrant->nomenclature}}</td>
                        <td>{{$quadrant->type->name}}</td>    
                        <td>{{$quadrant->axi->name}}</td>
                        <td>{{$quadrant->municipality->name}}</td>
                        <td>{{$quadrant->organism->name}}</td>
                        <td>{{$quadrant->user->name}}</td>
                        <td with="10px">
                        <a class="btn btn-sm" href="{{route('admin.quadrants.show',$quadrant)}}"><i class="fas fa-eye"></i></a>
                        </td>
                        <td with="10px">
                        @can('admin.quadrants.edit')
                        <a class="btn btn-sm" href="{{route('admin.quadrants.edit',$quadrant)}}"><i class="fas fa-edit"></i></a>
                        @endcan
                        </td>
                        <td with="10px">
                        @can('admin.quadrants.destroy')
                        <form action="{{route('admin.quadrants.destroy',$quadrant)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        @endcan
                        </td>       
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
                 <div class="card-footer">
                    {{$quadrants->links()}}
                </div>        
            </div>   
        @else
        <div class="card-body">
            <strong class="text-muted"> No Existe registro para la consulta {{$search}} </strong>
        </div>
      @endif    
    </div>
</div>
