@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            @include('admin.roles.partials.form')           
            {!! Form::submit('Procesar Registro', ['class'=> 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

    </div>
@stop

