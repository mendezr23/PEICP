@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Actualizar Tipo </h1>
@stop

@section('content')
         @if (session('info'))
        <div class="alert alert-info" >
        <strong>{{session('info')}}</strong>
        </div>
        @endif
     <div class="card">
        <div class="body">
            {!! Form::model($type,['route'=>['admin.types.update',$type],'method'=>'put']) !!}

            @include('admin.types.partiels.form')
            
            {!! Form::submit('Actualizar tipo Cuadrante', ['class'=>'btn btn-primary']) !!}

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