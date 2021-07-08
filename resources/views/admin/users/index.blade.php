@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('content_header')
    <div class="card-body">
     <h5 class="card-title">Listado de usuarios</h5>
  </div>
@stop

@section('content')
    @livewire('admin.users-index')

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop