@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    
@stop

@section('content')
<div class="container py-8">


    <div class="card text-white bg-secondary mb-3" style="max-width: 50rem;">
      <div class="card-header">Cuadrante {{$quadrant->id}} </div>
      <div class="card-header">Numero {{$quadrant->number}} </div>
      <div class="card-header">Nomenclatura {{$quadrant->nomenclature}} </div>
      <div class="card-header">Region {{$quadrant->region}} </div>
      <div class="card-header">Estado {{$quadrant->state}} </div>
      <div class="card-header">Eje {{$quadrant->axis}} </div>
      <div class="card-header">Municipio {{$quadrant->minicipality}} </div>
      <div class="card-header">Parroquia {{$quadrant->parish}} </div>
      <div class="card-header">Publo {{$quadrant->town}} </div>
      <div class="card-header">Sector {{$quadrant->sector}} </div>
      <div class="card-header">Organismo {{$quadrant->organism->name}} </div>
      <div class="card-header">Usuario Responsable {{$quadrant->user->name}} </div>
      
      <div class="card-body">
         
      </div>
    </div>

</div>    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop