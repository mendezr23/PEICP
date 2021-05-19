@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Crear organismo</h1>
@stop

@section('content')

<div class="card">
    <div class="body">
        {!! Form::open(['route'=>'admin.organisms.store']) !!}

        @include('admin.organisms.partiels.form')
        
        {!! Form::submit('Crear Organismos', ['class'=>'btn btn-primary','onclick'=>'this.disabled=true;this.form.submit();'])!!}

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