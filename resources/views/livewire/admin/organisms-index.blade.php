<div class="card">

        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Identificador</th>
                        <th>Organismo</th>
                        <th colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($organisms as $organism)
                        <tr>
                        <td width="10px">{{$organism->id}}</td>
                        <td>{{$organism->name}}</td>
                        <td width="10px">
                        <a class="btn btn-sm" href="{{route('admin.organisms.edit',$organism)}}"><i class="fas fa-edit"></i></a>
                        </td>
                        <td width="10px">
                        <form action="{{route('admin.organisms.destroy',$organism)}}" method="POST">
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
            {{$organisms->links()}}
        </div>
</div>
