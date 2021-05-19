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
            {!! Form::open(['route'=>'guest.periods.store']) !!}

            @include('guest.periods.partials.form')
            
            {!! Form::submit('Procesar Registro ', ['class'=>'btn btn-primary','onclick'=>'this.disabled=true;this.form.submit();']) !!}

            {!! Form::close() !!}

        </div>

     </div>
        
@stop