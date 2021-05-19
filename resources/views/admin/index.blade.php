@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')

    <span class="d-block p-2 bg-dark text-white mx-auto text-center">SISTEMA DE EVALUACION DE INDICADORES DE CUADRANTES DE PAZ</span>
@stop

@section('content')
<div class="container-fluid ">
    <div class="row justify-content-md-center">
     
        <div class="small-box bg-info m-2 col-sm-12 col-md-5">
            <div class="inner">
              <h3>{{$quadrants}}</h3>
              <p>Cuadrantes de Paz</p>
            </div>
            <div class="icon">
              <i class="fas fa-columns"></i>
            </div>
            <p class="small-box-footer">
              Estado Miranda
            </p>
          </div>
     
          <div class="small-box bg-info m-2 col-sm-12 col-md-5">
            <div class="inner">
              <h3>{{$organisms}}</h3>
              <p>Organismos de Seguridad</p>
            </div>
            <div class="icon">
              <i class="fas fa-archway"></i>
            </div>
            <p class="small-box-footer">
                Estado Miranda
              </p>
          </div>
          

    </div>
  </div
  
@stop

