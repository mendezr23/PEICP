@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Actualizacion de Cuadrante</h1>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-info" >
         <strong>{{session('info')}}</strong>
        </div>
    @endif
     <div class="card">
        <div class="body">
            {!! Form::model($quadrant,['route'=>['admin.quadrants.update',$quadrant],'method'=>'put']) !!}

            @include('admin.quadrants.partiels.form')
            
            {!! Form::submit('Actualizar Cuadrante', ['class'=>'btn btn-primary']) !!}

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