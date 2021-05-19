@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Crear nuevo indicador</h1>
@stop

@section('content')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'admin.indicators.store']) !!}
                
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

                {!! Form::submit('Crear Indicador', ['class'=>'btn btn-primary','onclick'=>'this.disabled=true;this.form.submit();']) !!}

                {!! Form::close() !!}

            </div>

        </div>
@stop

