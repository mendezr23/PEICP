@extends('adminlte::page')

@section('title', 'Programa de Evaluaciòn de Incentivos de Cuadrantes de Paz')

@section('content_header')

@stop

@section('content')

{!! Form::open(['route'=>'admin.reports.index', 'method'=>'GET']) !!}

<div class="row ">

    <div class="col-12 col-md-3">
        <span>Fecha inicial</span>
        <div class="form-group">
            <input class="form-control" type="date" 
            value="{{old('fecha_ini')}}" 
            name="fecha_ini" id="fecha_ini">
        </div>
    </div>
    <div class="col-12 col-md-3">
        <span>Fecha final</span>
        <div class="form-group">
            <input class="form-control" type="date" 
            value="{{old('fecha_fin')}}" 
            name="fecha_fin" id="fecha_fin">
        </div>
    </div>
    <div class="col-12 col-md-3 text-center mt-4">
        <div class="form-group">
           <button type="submit" class="btn btn-primary btn-sm">Consultar</button>
        </div>
    </div>   
    
{!! Form::close() !!}

 <div class="card">
    <div class="body table-responsive">
         <table class="table table-striped table-bordered table-sm">
     <thead class="thead-dark">
          <tr>
             <th>Responsable</th>
             <th>Cuadrante</th>
             <th>Region</th>
             <th>Estado</th>
             <th>Municipio</th>
             <th>Parroquia</th>
             <th>Puntos</th>
             <th>Fecha</th>
             
         </tr>
     </thead>
     <tbody>
         @foreach ($periods as $period)
         <tr>
             <td>{{$period->user->name}}</td>
             <td>{{$period->quadrant->id}}</td>
             <td>{{$period->quadrant->region->name}}</td>
             <td>{{$period->quadrant->state}}</td>
             <td>{{$period->quadrant->municipality->name}}</td>
             <td>{{$period->quadrant->parish}}</td>
             <td>{{$period->indicators_sum_indicator_periodamount}}
             {{-- @foreach ($period->indicators as $indicator)
             {{ $indicator->pivot->sum('amount')   }}
             @endforeach --}}
            </td>
             

             <td>{{Carbon\Carbon::parse($period->date_regis)->format('d-m-Y')}}</td>
             
         </tr>
         @endforeach
     </tbody>
     
  </table>
  
 </div>
    {{-- <div class="card-footer">
        {{$periods->links()}}
     </div> --}}
     
    </div>
</div>
@stop
