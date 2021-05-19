@extends('adminlte::page')

@section('title', 'TIPOS DE CUADRANTES')

@section('content_header')

<a class="btn btn-success float-right" href="{{route('admin.types.create')}}"> <i class="fas fa-plus-circle"></i> Tipos </a>
    <div class="card-body">
        <h5 class="card-title">Listado de tipos</h5>
      </div>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-info" >
        <strong>{{session('info')}}</strong>
        </div>
    @endif
    @livewire('admin.types-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop