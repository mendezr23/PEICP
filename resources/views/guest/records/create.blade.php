@extends('adminlte::page')

@section('title', 'Registro de Indicador')

@section('content_header')

@stop

@section('content')
    <p> Registro de indicadores - Funcionario</p>

    <div class="card">
        <div class="body">
            {!! Form::open(['route' => 'guest.records.store']) !!}
            @include('guest.records.partials.form')           
            {!! Form::submit('Procesar Registro', ['class'=> 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop