@extends('adminlte::page')

@section('title', 'CUADRANTES')

@section('content_header')

    @if (session('info'))
        <div class="alert alert-info" >
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @can('admin.quadrants.create')
    <a class="btn btn-success float-right" href="{{route('admin.quadrants.create')}}"> <i class="fas fa-plus-circle"></i> Cuadrante </a>    
    @endcan
    
    <div class="card-body">
        <h5 class="card-title">Listado de Cuadrantes</h5>
      </div>
@stop

@section('content')
    @livewire('admin.quadrants-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop