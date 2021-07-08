<div class="body" >
    {!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="form-group col-6">
    {!! Form::label('date_regis', 'Fecha de Registro') !!}
    {!! Form::date('date_regis', null, ['class'=>'form-control']) !!}
    @error('date_regis')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('quadrant_id', 'Cuadrante',) !!}
    {!! Form::select('quadrant_id', $quadrants, null, ['class'=>'form-control']) !!} 
    @error('quadrant_id')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<h2 class="h3"> Lista de Indicadores</h2>
@foreach ($indicators as $indicator)   
  <div >
    <label>
        {!! Form::hidden('indicators[]', $indicator->id, null,) !!}
        {{$indicator->id}} - <strong class="text-success">{{ $indicator->activity}}</strong>  - {{$indicator->action}} 
    </label>
 </div>
<div class="col-sm-12 col-xl-12">
    {!! Form::number('amount[]', 0, ['class'=>'form-control','placeholder'=>'cantidad',]) !!}
    @error('amount')
        <span class="text-danger">{{$message}}</span>
    @enderror
    {!! Form::text('observation[]', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}
    
    
</div>        
@endforeach
</div>