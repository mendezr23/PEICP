@extends('adminlte::page')

@section('title', 'ROLES')

@section('content_header')

        @if (session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif
    <a class="btn btn-success float-right" href="{{route('admin.roles.create')}}"> <i class="fas fa-plus-circle"></i> Nuevo rol </a>
    <div class="card-body">
        <h5 class="card-title">Listado de roles</h5>
      </div>
@stop

@section('content')
 <div class="card table-responsive">
    <table class="table table-striped table-sm">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Role</th>
                <th colspan="2"></th>
            </tr>

        </thead>

        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td width="10px">
                        <a class="btn btn-sm" href="{{route('admin.roles.edit',$role)}}"><i class="fas fa-edit"></i></a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>

 </div>
@stop

