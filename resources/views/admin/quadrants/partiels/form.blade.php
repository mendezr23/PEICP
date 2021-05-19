<div class="form-group">
    {!! Form::label('number', 'Numero') !!}
    {!! Form::text('number', null,['class'=>'form-control','placeholder'=>'Ingrese Numero']) !!}
</div>
<div class="form-group">

    {!! Form::label('type_id', 'Tipo',) !!}
    {!! Form::select('type_id', $types, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nomenclature', 'Nomenclatura') !!}
    {!! Form::text('nomenclature', null, ['class'=>'form-control','placeholder'=>'Ingrese Nomenclatura: ejemplo PR-01']) !!}
        @error('nomenclature')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('area', 'Area') !!}
    {!! Form::number('area', null, ['class'=>'form-control','placeholder'=>'Ejemplo: 58,25650']) !!}
</div>

<div class="form-group">
    {!! Form::label('perimeter', 'Perimetro') !!}
    {!! Form::number('perimeter', null, ['class'=>'form-control','placeholder'=>'Ejemplo: 8,287870']) !!}
</div>

<div class="form-group">
    {!! Form::label('region', 'Region') !!}
    {!! Form::text('region', null, ['class'=>'form-control','placeholder'=>'Ingrese Region']) !!}
        @error('region')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('state', 'Estado') !!}
    {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'Ingrese Estado']) !!}
        @error('state')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('axis', 'Eje') !!}
    {!! Form::text('axis', null, ['class'=>'form-control','placeholder'=>'Ingrese Eje']) !!}
        @error('axis')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('municipality', 'Municipio') !!}
    {!! Form::text('municipality', null, ['class'=>'form-control','placeholder'=>'Ingrese Municipio']) !!}
        @error('municipality')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('parish', 'Parroquia') !!}
    {!! Form::text('parish', null, ['class'=>'form-control','placeholder'=>'Ingrese Parroquia']) !!}
        @error('parish')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('town', 'Pueblo') !!}
    {!! Form::text('town', null, ['class'=>'form-control','placeholder'=>'Ingrese Pueblo']) !!}
        @error('town')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">
    {!! Form::label('sector', 'Sector') !!}
    {!! Form::text('sector', null, ['class'=>'form-control','placeholder'=>'Ingrese Sector']) !!}
        @error('sector')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">

    {!! Form::label('organism_id', 'Organismo',) !!}
    {!! Form::select('organism_id', $organisms, null, ['class'=>'form-control']) !!}
        @error('organism_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>

<div class="form-group">

    {!! Form::label('user_id', 'Usuario Responsable',) !!}
    {!! Form::select('user_id', $users, null, ['class'=>'form-control']) !!}
        @error('user_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
</div>