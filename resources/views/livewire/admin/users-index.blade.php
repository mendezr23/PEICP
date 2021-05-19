<div class="card">  
    <div class="table-responsive">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>

        @if ($users->count())
            
        <div class="card-body">
           
            <table class="table table-striped table-sm ">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th colspan="1"></th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->cedula}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td with="10px">
                            <a class="btn btn-sm" href="{{route('admin.users.edit',$user)}}"><i class="fas fa-edit"></i></a>    
                            </td>      
                        </tr>      
                        @endforeach
                    </tbody>
                 </table>
            </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>    
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        
        @endif
    </div>
</div>
