<div class="form-group">
    {!! Form::label('name', 'Tipo') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese Tipo de cuadrante']) !!}
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>