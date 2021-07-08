@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1><h1>Crear Registro de Indicadores</h1></h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-info" >
        <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card ">
        <div class="body table-striped table-sm">
            {!! Form::open(['route'=>'admin.records.store']) !!}

            @include('admin.records.partiels.form')
            
            {!! Form::submit('Procesar Registro ', ['class'=>'btn btn-primary','onclick'=>'this.disabled=true;this.form.submit();']) !!}

            {!! Form::close() !!}

        </div>

     </div>
        
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>  </script>
    <script> console.log('Hi!'); </script>
@stop