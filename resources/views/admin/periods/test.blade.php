<div>
    <div class="alert alert-info" >
        <strong>{{session('info')}}</strong>
    </div>
        @endif
        <div class="body" >
            {!! Form::open(['route'=>'admin.records.store']) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
          <div class="form-group">
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

          <table>
              @foreach ($indicators as $indicator)
                  
              
              <th >
                <tr>
                    <th> {{$indicator->id}}</th>
                    <th> {{$indicator->activity}} </th>
                    <th> {{$indicator->action}}</th>
                    <th> {!! Form::input('indicators1[]', $indicator, 0 , ['class'=>'form-control']) !!}</th>
                    <th> {!! Form::input('indicators2[]', $indicator, null, ['class'=>'form-control','placeholder'=>'Ingrese datos de validacion']) !!}</th>
                </tr>
            </th>
            @endforeach
          </table>

            {!! Form::submit ('Crear Registro', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>