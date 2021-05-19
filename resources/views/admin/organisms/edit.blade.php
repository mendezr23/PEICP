@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Actualizacion de organismos</h1>
@stop

@section('content')

        @if (session('info'))
        <div class="alert alert-info" >
            <strong>{{session('info')}}</strong>
        </div>
        @endif

<div class="card">
    <div class="body">
        {!! Form::model($organism,['route'=>['admin.organisms.update',$organism],'method'=>'put']) !!}

        @include('admin.organisms.partiels.form')
        
        {!! Form::submit('Actualizar Organismo', ['class'=>'btn btn-primary']) !!}

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