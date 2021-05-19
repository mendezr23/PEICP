@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    <h1><h1>Detalles del registro de indicador</h1></h1>
@stop

@section('content')

<div class="card-body table-responsive">

<div class="card text-white bg-secondary mb-3 py-2" style="max-width: 18rem;">
    <div class="card-header">Cuadrante {{$record->quadrant->id}} </div>
    <div class="card-body">
      <h5 class="card-title">Nomenclatura: {{$record->quadrant->nomenclature}}</h5>
      <h5 class="card-title">Estado : {{$record->quadrant->state}}</h5>
      <h5 class="card-title">Municipio: {{$record->quadrant->municipality}}</h5>
      <h4 class="card-title">Parroquia: {{$record->quadrant->parish}}</h5> 
      <h4 class="card-title">Responsable: {{$record->user->name}}</h5>              
    </div>
  </div>   

  <div class="">
      <table class="table table-striped table-bordered table-sm">
        <thead class="thead-dark">
          <tr>
            <th>Indicador</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Descripciòn</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{$record->ind1}} - CAPACIDAD OPERATIVA</td>
              <td>{{$record->name1}}</td>
              <td>{{$record->amount1}}</td>
              <td>{{$record->desc1}}</td>
            </tr>
            <tr>
              <td>{{$record->ind2}} - CAPACIDAD OPERATIVA</td>
              <td>{{$record->name2}}</td>
              <td>{{$record->amount2}}</td>
              <td>{{$record->desc2}}</td>
            </tr>
            <tr>
              <td>{{$record->ind3}} - CAPACIDAD OPERATIVA</td>
              <td>{{$record->name3}}</td>
              <td>{{$record->amount3}}</td>
              <td>{{$record->desc3}}</td>
            </tr>
            <tr>
              <td>{{$record->ind4}} - CAPACIDAD OPERATIVA</td>
              <td>{{$record->name4}}</td>
              <td>{{$record->amount4}}</td>
              <td>{{$record->desc4}}</td>
            </tr>
            <tr>
              <td>{{$record->ind5}} - CAPACIDAD OPERATIVA</td>
              <td>{{$record->name5}}</td>
              <td>{{$record->amount5}}</td>
              <td>{{$record->desc5}}</td>
            </tr>
            <tr>
              <td>{{$record->ind6}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name6}}</td>
              <td>{{$record->amount6}}</td>
              <td>{{$record->desc6}}</td>
            </tr>
            <tr>
              <td>{{$record->ind7}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name7}}</td>
              <td>{{$record->amount7}}</td>
              <td>{{$record->desc7}}</td>
            </tr>
            <tr>
              <td>{{$record->ind8}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name8}}</td>
              <td>{{$record->amount8}}</td>
              <td>{{$record->desc8}}</td>
            </tr>
            <tr>
              <td>{{$record->ind9}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name9}}</td>
              <td>{{$record->amount9}}</td>
              <td>{{$record->desc9}}</td>
            </tr>
            <tr>
              <td>{{$record->ind10}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name10}}</td>
              <td>{{$record->amount10}}</td>
              <td>{{$record->desc10}}</td>
            </tr>
            <tr>
              <td>{{$record->ind11}} - ACTUACIÓN POLICIAL </td>
              <td>{{$record->name11}}</td>
              <td>{{$record->amount11}}</td>
              <td>{{$record->desc11}}</td>
            </tr>
            <tr>
              <td>{{$record->ind12}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name12}}</td>
              <td>{{$record->amount12}}</td>
              <td>{{$record->desc12}}</td>
            </tr>
            <tr>
              <td>{{$record->ind13}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name13}}</td>
              <td>{{$record->amount13}}</td>
              <td>{{$record->desc13}}</td>
            </tr>
            <tr>
              <td>{{$record->ind14}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name14}}</td>
              <td>{{$record->amount14}}</td>
              <td>{{$record->desc14}}</td>
            </tr>
            <tr>
              <td>{{$record->ind15}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name15}}</td>
              <td>{{$record->amount15}}</td>
              <td>{{$record->desc15}}</td>
            </tr>
            <tr>
              <td>{{$record->ind16}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name16}}</td>
              <td>{{$record->amount16}}</td>
              <td>{{$record->desc16}}</td>
            </tr>
            <tr>
              <td>{{$record->ind17}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name17}}</td>
              <td>{{$record->amount17}}</td>
              <td>{{$record->desc17}}</td>
            </tr>
            <tr>
              <td>{{$record->ind18}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name18}}</td>
              <td>{{$record->amount18}}</td>
              <td>{{$record->desc18}}</td>
            </tr>
            <tr>
              <td>{{$record->ind19}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name19}}</td>
              <td>{{$record->amount19}}</td>
              <td>{{$record->desc19}}</td>
            </tr>
            <tr>
              <td>{{$record->ind20}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name20}}</td>
              <td>{{$record->amount20}}</td>
              <td>{{$record->desc20}}</td>
            </tr>
            <tr>
              <td>{{$record->ind21}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name21}}</td>
              <td>{{$record->amount21}}</td>
              <td>{{$record->desc21}}</td>
            </tr>
            <tr>
              <td>{{$record->ind22}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name22}}</td>
              <td>{{$record->amount22}}</td>
              <td>{{$record->desc22}}</td>
            </tr>
            <tr>
              <td>{{$record->ind23}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name23}}</td>
              <td>{{$record->amount23}}</td>
              <td>{{$record->desc23}}</td>
            </tr>
            <tr>
              <td>{{$record->ind24}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name24}}</td>
              <td>{{$record->amount24}}</td>
              <td>{{$record->desc24}}</td>
            </tr>
            <tr>
              <td>{{$record->ind25}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name25}}</td>
              <td>{{$record->amount25}}</td>
              <td>{{$record->desc25}}</td>
            </tr>
            <tr>
              <td>{{$record->ind26}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name26}}</td>
              <td>{{$record->amount26}}</td>
              <td>{{$record->desc26}}</td>
            </tr>
            <tr>
              <td>{{$record->ind27}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name27}}</td>
              <td>{{$record->amount27}}</td>
              <td>{{$record->desc27}}</td>
            </tr>
            <tr>
              <td>{{$record->ind28}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name28}}</td>
              <td>{{$record->amount28}}</td>
              <td>{{$record->desc28}}</td>
            </tr>
            <tr>
              <td>{{$record->ind29}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name29}}</td>
              <td>{{$record->amount29}}</td>
              <td>{{$record->desc29}}</td>
            </tr>
            <tr>
              <td>{{$record->ind30}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name30}}</td>
              <td>{{$record->amount30}}</td>
              <td>{{$record->desc30}}</td>
            </tr>
            <tr>
              <td>{{$record->ind31}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name31}}</td>
              <td>{{$record->amount31}}</td>
              <td>{{$record->desc31}}</td>
            </tr>
            <tr>
              <td>{{$record->ind32}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name32}}</td>
              <td>{{$record->amount32}}</td>
              <td>{{$record->desc32}}</td>
            </tr>
            <tr>
              <td>{{$record->ind33}} - ACTUACIÓN POLICIAL</td>
              <td>{{$record->name33}}</td>
              <td>{{$record->amount33}}</td>
              <td>{{$record->desc33}}</td>
            </tr>
            <tr>
              <td>{{$record->ind34}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name34}}</td>
              <td>{{$record->amount34}}</td>
              <td>{{$record->desc34}}</td>
            </tr>
            <tr>
              <td>{{$record->ind35}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name35}}</td>
              <td>{{$record->amount35}}</td>
              <td>{{$record->desc35}}</td>
            </tr>
            <tr>
              <td>{{$record->ind36}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name36}}</td>
              <td>{{$record->amount36}}</td>
              <td>{{$record->desc36}}</td>
            </tr>
            <tr>
              <td>{{$record->ind37}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name37}}</td>
              <td>{{$record->amount37}}</td>
              <td>{{$record->desc37}}</td>
            </tr>
            <tr>
              <td>{{$record->ind38}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name38}}</td>
              <td>{{$record->amount38}}</td>
              <td>{{$record->desc38}}</td>
            </tr>
            <tr>
              <td>{{$record->ind39}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name39}}</td>
              <td>{{$record->amount39}}</td>
              <td>{{$record->desc39}}</td>
            </tr>
            <tr>
              <td>{{$record->ind40}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name40}}</td>
              <td>{{$record->amount40}}</td>
              <td>{{$record->desc40}}</td>
            </tr>
            <tr>
              <td>{{$record->ind41}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name41}}</td>
              <td>{{$record->amount41}}</td>
              <td>{{$record->desc41}}</td>
            </tr>
            <tr>
              <td>{{$record->ind42}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name42}}</td>
              <td>{{$record->amount42}}</td>
              <td>{{$record->desc42}}</td>
            </tr>
            <tr>
              <td>{{$record->ind43}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name43}}</td>
              <td>{{$record->amount43}}</td>
              <td>{{$record->desc43}}</td>
            </tr>
            <tr>
              <td>{{$record->ind44}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name44}}</td>
              <td>{{$record->amount44}}</td>
              <td>{{$record->desc44}}</td>
            </tr>
            <tr>
              <td>{{$record->ind45}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name45}}</td>
              <td>{{$record->amount45}}</td>
              <td>{{$record->desc45}}</td>
            </tr>
            <tr>
              <td>{{$record->ind46}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name46}}</td>
              <td>{{$record->amount46}}</td>
              <td>{{$record->desc46}}</td>
            </tr>
            <tr>
              <td>{{$record->ind47}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name47}}</td>
              <td>{{$record->amount47}}</td>
              <td>{{$record->desc47}}</td>
            </tr>
            <tr>
              <td>{{$record->ind48}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name48}}</td>
              <td>{{$record->amount48}}</td>
              <td>{{$record->desc48}}</td>
            </tr>
            <tr>
              <td>{{$record->ind49}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name49}}</td>
              <td>{{$record->amount49}}</td>
              <td>{{$record->desc49}}</td>
            </tr>
            <tr>
              <td>{{$record->ind50}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name50}}</td>
              <td>{{$record->amount50}}</td>
              <td>{{$record->desc50}}</td>
            </tr>
            <tr>
              <td>{{$record->ind51}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name51}}</td>
              <td>{{$record->amount51}}</td>
              <td>{{$record->desc51}}</td>
            </tr>
            <tr>
              <td>{{$record->ind52}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name52}}</td>
              <td>{{$record->amount52}}</td>
              <td>{{$record->desc52}}</td>
            </tr>
            <tr>
              <td>{{$record->ind53}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name53}}</td>
              <td>{{$record->amount53}}</td>
              <td>{{$record->desc53}}</td>
            </tr>
            <tr>
              <td>{{$record->ind54}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name54}}</td>
              <td>{{$record->amount54}}</td>
              <td>{{$record->desc54}}</td>
            </tr>
            <tr>
              <td>{{$record->ind55}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name55}}</td>
              <td>{{$record->amount55}}</td>
              <td>{{$record->desc55}}</td>
            </tr>
            <tr>
              <td>{{$record->ind56}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name56}}</td>
              <td>{{$record->amount56}}</td>
              <td>{{$record->desc56}}</td>
            </tr>
            <tr>
              <td>{{$record->ind57}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name57}}</td>
              <td>{{$record->amount57}}</td>
              <td>{{$record->desc57}}</td>
            </tr>
            <tr>
              <td>{{$record->ind58}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name58}}</td>
              <td>{{$record->amount58}}</td>
              <td>{{$record->des58}}</td>
            </tr>
            <tr>
              <td>{{$record->ind59}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name59}}</td>
              <td>{{$record->amount59}}</td>
              <td>{{$record->desc59}}</td>
            </tr>
            <tr>
              <td>{{$record->ind60}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name60}}</td>
              <td>{{$record->amount60}}</td>
              <td>{{$record->desc60}}</td>
            </tr>
            <tr>
              <td>{{$record->ind61}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name61}}</td>
              <td>{{$record->amount61}}</td>
              <td>{{$record->desc61}}</td>
            </tr>
            <tr>
              <td>{{$record->ind62}} - ACTIVIDADES PREVENTIVAS</td>
              <td>{{$record->name62}}</td>
              <td>{{$record->amount62}}</td>
              <td>{{$record->desc62}}</td>
            </tr>
        </tbody>

      </table>

  </div>


@stop

</div>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop