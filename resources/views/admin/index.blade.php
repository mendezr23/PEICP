@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')

@stop

@section('content')
<div class="container-fluid">
    <div class="row mb-2 justify-content-md-center text-center">
      <div class="col-md-10">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">Bienvenidos al sistema de evaluación de indicadores de Cuadrantes de Paz de la Secretaría de Seguridad Ciudadana de la Gobernación del Estado Bolivariano de Miranda </h3>
            <div class="mb-1 p-2 text-muted"></div>
            <cite title="Source Title">¡Defender, Proteger y Servir a nuestro Pueblo! </cite></footer>
          </div>
          <div class="col-auto d-none d-lg-block text-align-center">
            <img src="{{asset('vendor/adminlte/dist/img/MirandaLogo.png')}}" alt="" style="width:120px">
          </div>
        </div>
      </div>
    </div>


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
                        <p class="small-box-footer">Estado Miranda</p>
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
      </div>

  </div>
      <div class="justify-content-md-center">
        <footer class="main-footer text-right">
          <strong>Gobernación Bolivariana de Miranda &copy; 2021 <a href="http://peicp.bendiciendomiciudad.com">PEICP</a>.</strong>
          <div >
            <b>Version</b> 1.0.0
          </div>
          <p><small>Desarrollado por Ing.María Izaguirre / Ing.Domingo Méndez. <br>Soporte: sistemadeincentivospeicp@gmail.com</small></p>
        </footer>
    </div>
  
  @stop

