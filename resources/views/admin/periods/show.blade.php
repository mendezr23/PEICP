@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')
    
@stop

@section('content')
<div class="container py-8">
    
        <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Detalles del Registro:</h5>
              <b># Transaccion:</b> {{$period->id}}<br>
              <b># Cuadrante: </b>{{$period->quadrant->id}}<br>
              <b>Nomenclatura:</b> {{$period->quadrant->nomenclature}}<br>
              <b>Estado:</b> {{$period->quadrant->state}}<br>
              <b>Municipio:</b> {{$period->quadrant->municipality->name}}<br>
              <b>Parroquia:</b> {{$period->quadrant->parish}}<br>
              <b>Responsable:</b> {{$period->user->name}}<br>
              <b>Fecha correspondiente al Indicator:</b> {{Carbon\Carbon::parse($period->date_regis)->format('d-m-Y')}}              
              
        </div>

        <div class ="card-body">
            <table class="table table-striped table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Actividad</th>
                        <th>Acción</th>
                        <th>Cantidad</th>
                        <th>Observación</th>
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach ($period->indicators as $indicator)
                    <tr>
                        <td>{{$indicator->activity}}</td>
                        <td>{{$indicator->action}}</td>
                        <td>{{$indicator->pivot->amount}}</td>
                        <td>{{$indicator->pivot->observation}}</td>
                        
                    </tr> 
                    {{$indicator->pivot->indicators_sum_indicator_periodsamount}}
                    @endforeach
                </tbody>
                <td class="colspan-3 text-success">
                    <span class="badge badge-dark">Total General</span>
                </td>
                <td>

                </td>
                <td class="text-success">
                    <span class="badge badge-dark">{{$period->indicators->sum('pivot.amount')}}</span>
                </td>
            </table>
        </div>
</div>    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop