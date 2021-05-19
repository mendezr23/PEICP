@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Crear tipo de cuadrante </h1>
@stop

@section('content')
     <div class="card">
        <div class="body">
            {!! Form::open(['route'=>'admin.types.store']) !!}

            @include('admin.types.partiels.form')
            
            {!! Form::submit('Crear tipos de cuadrante', ['class'=>'btn btn-primary','onclick'=>'this.disabled=true;this.form.submit();']) !!}

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