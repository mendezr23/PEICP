@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1>Actualizar roles</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
        
    @endif
        <div class="card">

            <div class="card-body">
                {!! Form::model($role, ['route' => ['admin.roles.update',$role],'method' => 'put']) !!}
                @include('admin.roles.partials.form')
                {!! Form::submit('Actualizar rol', ['class'=> 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
@stop
