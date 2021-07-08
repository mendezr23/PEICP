@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    
@stop

@section('content')
<div class="container py-8">

    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Detalles del Cuadrante:</h5>
        <b># Cuadrante: </b>{{$quadrant->id}}<br>
        <b>Número: </b>{{$quadrant->number}}<br>
        <b>Nomenclatura:</b> {{$quadrant->nomenclature}}<br>
        <b>Región:</b> {{$quadrant->region->name}}<br>
        <b>Estado:</b> {{$quadrant->state}}<br>
        <b>Eje:</b> {{$quadrant->axi->name}}<br>
        <b>Municipio:</b> {{$quadrant->municipality->name}}<br>
        <b>Parroquia:</b> {{$quadrant->parish}}<br>
        <b>Pueblo:</b> {{$quadrant->town}}<br>
        <b>Sector:</b> {{$quadrant->sector}}<br>
        <b>Organismo:</b> {{$quadrant->organism->name}}<br>
        <b>Responsable:</b> {{$quadrant->user->name}}<br>
        
  </div>
        <div class="mt-10">
            <a href="{{ route('admin.quadrants.index') }}" class="button">
                Atras
            </a>
        </div>    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop