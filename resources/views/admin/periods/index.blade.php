@extends('adminlte::page')

@section('title', 'REGISTRO DE INDICADOR')

@section('content_header')

<div class="card-body">
    <h5 class="card-title">Listado de Indicadores Registrados</h5>
  </div>
@stop
        
@section('content')
    @if (session('info'))
        <div class="alert alert-info" >
         <strong>{{session('info')}}</strong>
         </div>
    @endif
        @livewire('admin.periods-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop