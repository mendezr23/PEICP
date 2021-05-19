<div>
    <div div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el numero del cuadrante">
        </div>
        @if ($records->count())
    
        <div class="body table-responsive">
             <table class="table table-striped table-bordered table-sm">
         <thead class="thead-dark">
              <tr>
                 <th>Responsable</th>
                 <th>Cuadrante</th>
                 <th>Region</th>
                 <th>Estado</th>
                 <th>Municipio</th>
                 <th>Parroquia</th>
                 <th>Fecha</th>
                 <th colspan="1">Opciones</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($records as $record)
             <tr>
                 <td>{{$record->user->name}}</td>
                 <td>{{$record->quadrant->id}}</td>
                 <td>{{$record->quadrant->region}}</td>
                 <td>{{$record->quadrant->state}}</td>
                 <td>{{$record->quadrant->municipality}}</td>
                 <td>{{$record->quadrant->parish}}</td>
                 <td>{{$record->date_regis}}</td>
                 <td width="10px">
                 <a class="btn btn-sm" href="{{route('admin.records.show',$record)}}"><i class="fab fa-r-project"></i></a>
                 </td>
             </tr>
             @endforeach
         </tbody>
      </table>
     </div>
     <div class="card-footer">
         {{$records->links()}}
     </div>   
    </div>
    @else
        <div class="card-body">
            <strong class="text-muted"> No Existe registro para la consulta {{$search}} </strong>
        </div>
      @endif    
    
</div>
