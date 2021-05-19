<div class="card">

    <div class="table-responsive">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el numero del Indicator">
        </div>
            @if ($indicators->count())
            <div class="card-body table-responsive">
                <table class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                            <th>CODIGO</th>
                            <th>ACTIVIDAD</th>
                            <th>ACCIONES</th>
                            <th colspan="2"></th>
                            </tr>
                         </thead>
                        <tbody>
                        @foreach ($indicators as $indicator)
                            <tr>
                            <td>{{$indicator->id}}</td>
                            <td>{{$indicator->activity}}</td>
                            <td>{{$indicator->action}}</td>
                            <td >
                            @can('admin.indicators.edit')   
                            <a class="btn btn-sm" href="{{route('admin.indicators.edit',$indicator)}}"><i class="fas fa-edit"></i></a>
                            @endcan
                            </td>
                            <td >
                            @can('admin.indicators.destroy')      
                            <form action="{{route('admin.indicators.destroy',$indicator)}}" method="POST">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            @endcan
                            </td>
                             </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
            <div class="card-footer">
                {{$indicators->links()}}
            </div>
            @else
            <div class="card-body">
                <strong class="text-muted"> No Existe registro para la consulta {{$search}} </strong>
            </div>
        @endif   
    </div>  
</div>
