@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Editar Indicador</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-info" >
        <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($indicator, ['route'=>['admin.indicators.update',$indicator],'method'=>'put']) !!}       
        <div class="form-group">
        {!! Form::label('activity', 'Actividad') !!}
        {!! Form::text('activity', null, ['class'=>'form-control','placeholder'=>'Ingrese nombre de la Actividad']) !!}
        @error('activity')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('action', 'Accion') !!}
        {!! Form::text('action', null, ['class'=>'form-control','placeholder'=>'Ingrese nombre de la Accion']) !!}
        @error('action')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
        {!! Form::submit('Actualizar Indicador', ['class'=>'btn btn-primary']) !!}
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