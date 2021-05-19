@extends('adminlte::page')

@section('title', 'INDICADORES')

@section('content_header')

    @can('admin.indicators.create')
    <a class="btn btn-success float-right" href="{{route('admin.indicators.create')}}"> <i class="fas fa-plus-circle"></i> Indicador </a>
    @endcan

    <div class="card-body">
        <h5 class="card-title">Listado de Indicadores</h5>
      </div>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-info" >
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    @livewire('admin.indicators-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


