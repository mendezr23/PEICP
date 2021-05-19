@extends('adminlte::page')

@section('title', 'Registro de Indicadores')

@section('content_header')

    <div class="container"> 
        @if (session('info'))
        <div class="alert alert-info" >
        <strong>{{session('info')}}</strong>
        </div>
        @endif

        <div class="row bg-dark display-flex align-items-center justify-content-center">
            <div class="col">
                Modulo de Indicadores
            </div>
            <div class="p-2 mb-2" >
                
                <a class="btn btn-success float-right" href="{{route('guest.records.create')}}"> <i class="fas fa-plus-circle"></i> Registrar Indicador </a>
            </div>
            <div class="p-2 mb-2" >
                
                <a class="btn btn-success float-right" href="{{route('guest.records.create')}}"> <i class="fas fa-plus-circle"></i> Crear Fecha </a>
            </div>
        
        </div>
    </div>

@stop

@section('content')
    <p> Nuevo modulo de guest</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop