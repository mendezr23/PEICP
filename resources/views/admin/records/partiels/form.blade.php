<div class="body" >
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
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-sm">
      <tr>
        <div class="form-group">
            {!! Form::label('', 'INDICADOR',) !!}
        </div>
        <tr >
            <td>{!! Form::label('ind1', 'CAPACIDAD OPERATIVA - PATRULLAS OPERATIVAS',) !!}</td>
                {!! Form::hidden('ind1', 1) !!}
                {!! Form::hidden('name1', 'PATRULLAS OPERATIVAS') !!}
            <td>{!! Form::number('amount1', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
                @error('amount1')
                  <span class="text-danger">{{$message}}</span>
                @enderror
            </td>
            <td>{!! Form::text('desc1', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('ind2', 'CAPACIDAD OPERATIVA - MOTOS OPERATIVAS',) !!}</td>
                {!! Form::hidden('ind2', 2) !!}
                {!! Form::hidden('name2', 'MOTOS OPERATIVAS') !!}
            <td>{!! Form::number('amount2', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
                  @error('amount2')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
            </td>
            <td>{!! Form::text('desc2', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('ind3', 'CAPACIDAD OPERATIVA - FUNCIONARIOS LABORANDO POR TURNO',) !!}</td>
                {!! Form::hidden('ind3', 3) !!}
                {!! Form::hidden('name3', ' FUNCIONARIOS LABORANDO POR TURNO',) !!}
            <td>{!! Form::number('amount3', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount3')
              <span class="text-danger">{{$message}}</span>
             @enderror
            </td>
            <td>{!! Form::text('desc3', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('ind4', 'CAPACIDAD OPERATIVA - TELEFÓNO INTELIGENTE OPERATIVO',) !!}</td>
                {!! Form::hidden('ind4', 4) !!}
                {!! Form::hidden('name4', ' TELEFÓNO INTELIGENTE OPERATIVO',) !!}
            <td>{!! Form::number('amount4', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount4')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc4', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        
        <tr>
          <td>{!! Form::label('ind5', 'CAPACIDAD OPERATIVA - EQUIPOS DE RADIO OPERATIVOS',) !!}</td>
              {!! Form::hidden('ind5', 5) !!}
              {!! Form::hidden('name5', ' EQUIPOS DE RADIO OPERATIVOS',) !!}
          <td>{!! Form::number('amount5', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount5')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
          <td>{!! Form::text('desc5', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
      </tr>
      <tr>
        <td>{!! Form::label('ind6', 'ACTUACIÓN POLICIAL - DESPLIEGUE DE SEGURIDAD',) !!}</td>
            {!! Form::hidden('ind6', 6) !!}
            {!! Form::hidden('name6', ' DESPLIEGUE DE SEGURIDAD',) !!}</td>
        <td>{!! Form::number('amount6', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount6')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
        <td>{!! Form::text('desc6', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
    </tr>
    <tr>
      <td>{!! Form::label('ind7', 'ACTUACIÓN POLICIAL - DISPOSITIVOS DE SEGURIDAD',) !!}</td>
          {!! Form::hidden('ind7', 7) !!}
          {!! Form::hidden('name7', ' DISPOSITIVOS DE SEGURIDAD',) !!}</td>
      <td>{!! Form::number('amount7', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount7')
              <span class="text-danger">{{$message}}</span>
             @enderror
            </td>
      <td>{!! Form::text('desc7', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
    </tr>
    <tr>
        <td>{!! Form::label('ind8', 'ACTUACIÓN POLICIAL - SATURACIÓN DE ÁREA',) !!}</td>
            {!! Form::hidden('ind8', 8) !!}
            {!! Form::hidden('name8', ' SATURACIÓN DE ÁREA',) !!}</td>
        <td>{!! Form::number('amount8', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount8')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
    <td>{!! Form::text('desc8', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
</tr>
<tr>
          <td>{!! Form::label('ind9', 'ACTUACIÓN POLICIAL - ALTERACIÓN DEL ORDEN PÚBLICO',) !!}</td>
              {!! Form::hidden('ind9', 9) !!}
              {!! Form::hidden('name9', ' ALTERACIÓN DEL ORDEN PÚBLICO',) !!}
          <td>{!! Form::number('amount9', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount9')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
  <td>{!! Form::text('desc9', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
</tr>
      <tr>
          <td>{!! Form::label('ind10', 'ACTUACIÓN POLICIAL - MANIFESTACIONES',) !!}</td>
              {!! Form::hidden('ind10', 10) !!}
              {!! Form::hidden('name10', ' MANIFESTACIONES',) !!}
          <td>{!! Form::number('amount10', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
                @error('amount10')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </td>
  <td>{!! Form::text('desc10', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
</tr>
<tr>
          <td>{!! Form::label('ind11', 'ACTUACIÓN POLICIAL - PUNTOS DE BLOQUEO INTERMUNICIPIO',) !!}</td>
              {!! Form::hidden('ind11', 11) !!}
              {!! Form::hidden('name11', ' PUNTOS DE BLOQUEO INTERMUNICIPIO',) !!}
          <td>{!! Form::number('amount11', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount11')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
          <td>{!! Form::text('desc11', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
          <td>{!! Form::label('ind12', 'ACTUACIÓN POLICIAL - CIUDADANOS VERIFICADOS POR SIIPOL',) !!}</td>
              {!! Form::hidden('ind12', 12) !!}
              {!! Form::hidden('name12', ' CIUDADANOS VERIFICADOS POR SIIPOL',) !!}
            <td>{!! Form::number('amount12', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount12')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
          <td>{!! Form::text('desc12', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
          <td>{!! Form::label('ind13', 'ACTUACIÓN POLICIAL - CIUDADANOS INSPECCIONADOS',) !!}</td>
              {!! Form::hidden('ind13', 13) !!}
              {!! Form::hidden('name13', ' CIUDADANOS INSPECCIONADOS',) !!}
          <td>{!! Form::number('amount13', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount13')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
          <td>{!! Form::text('desc13', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
      </tr>
        <tr>
          <td>{!! Form::label('ind14', 'ACTUACIÓN POLICIAL - VEHÍCULOS VERIFICADOS POR SIIPOL',) !!}</td>
              {!! Form::hidden('ind14', 14) !!}
              {!! Form::hidden('name14', ' VEHÍCULOS VERIFICADOS POR SIIPOL',) !!}
          <td>{!! Form::number('amount14', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount14')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
          <td>{!! Form::text('desc14', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr> 
        <tr>
          <td>{!! Form::label('ind15', 'ACTUACIÓN POLICIAL - VEHÍCULOS INSPECCIONADOS',) !!}</td>
              {!! Form::hidden('ind15', 15) !!}
              {!! Form::hidden('name15', ' VEHÍCULOS INSPECCIONADOS',) !!}
          <td>{!! Form::number('amount15', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount15')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>
          <td>{!! Form::text('desc15', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        <tr>
          <td>{!! Form::label('ind16', 'ACTUACIÓN POLICIAL - MOTOS VERIFICADAS POR SIIPOL',) !!}</td>
              {!! Form::hidden('ind16', 16) !!}
              {!! Form::hidden('name16', ' MOTOS VERIFICADAS POR SIIPOL',) !!}
          <td>{!! Form::number('amount16', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount16')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>
          <td>{!! Form::text('desc16', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        <tr>
          <td>{!! Form::label('ind17', 'ACTUACIÓN POLICIAL - MOTOS INSPECCIONADAS ',) !!}</td>
              {!! Form::hidden('ind17', 17) !!}
              {!! Form::hidden('name17', ' MOTOS INSPECCIONADAS ',) !!}
          <td>{!! Form::number('amount17', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount17')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
          <td>{!! Form::text('desc17', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        <tr>
          <td>{!! Form::label('ind18', 'ACTUACIÓN POLICIAL - ARMAS DE FUEGO VERIFICADAS POR SIIPOL',) !!}</td>
              {!! Form::hidden('ind18', 18) !!}
              {!! Form::hidden('name18', ' ARMAS DE FUEGO VERIFICADAS POR SIIPOL',) !!}
          <td>{!! Form::number('amount18', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount18')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
          <td>{!! Form::text('desc18', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind19', 'ACTUACIÓN POLICIAL - INSPECCIÓN DE TRANSPORTE PÚBLICO',) !!}</td>
              {!! Form::hidden('ind19', 19) !!}
              {!! Form::hidden('name19', ' INSPECCIÓN DE TRANSPORTE PÚBLICO',) !!}
          <td>{!! Form::number('amount19', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount19')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>
          <td>{!! Form::text('desc19', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind20', 'ACTUACIÓN POLICIAL - DECOMISOS',) !!}</td>
              {!! Form::hidden('ind20', 20) !!}
              {!! Form::hidden('name20', ' DECOMISOS',) !!}
          <td>{!! Form::number('amount20', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount20')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>
          <td>{!! Form::text('desc20', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>

          <tr>
          <td>{!! Form::label('ind21', 'ACTUACIÓN POLICIAL - APREHENDIDOS FLAGRANTES',) !!}</td>
              {!! Form::hidden('ind21', 21) !!}
              {!! Form::hidden('name21', ' APREHENDIDOS FLAGRANTES',) !!}
          <td>{!! Form::number('amount21', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
          @error('amount21')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </td>

          <td>{!! Form::text('desc21', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
          <td>{!! Form::label('ind22', 'ACTUACIÓN POLICIAL - APREHENDIDOS SOLICITADOSL',) !!}</td>
              {!! Form::hidden('ind22', 22) !!}
              {!! Form::hidden('name22', ' APREHENDIDOS SOLICITADOSL',) !!}
          <td>{!! Form::number('amount22', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount22')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>
          <td>{!! Form::text('desc22', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
          <td>{!! Form::label('ind23', 'ACTUACIÓN POLICIAL - ARMAS DE FUEGO INCAUTADAS',) !!}</td>
              {!! Form::hidden('ind23', 23) !!}
              {!! Form::hidden('name23', ' ARMAS DE FUEGO INCAUTADAS',) !!}
          <td>{!! Form::number('amount23', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount23')  
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>
          <td>{!! Form::text('desc23', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('ind24', 'ACTUACIÓN POLICIAL - MUNICIONES INCAUTADAS',) !!}</td>
              {!! Form::hidden('ind24', 24) !!}
              {!! Form::hidden('name24', ' MUNICIONES INCAUTADAS',) !!}
          <td>{!! Form::number('amount24', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount24')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>   
        <td>{!! Form::text('desc24', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        <tr>
          <td>{!! Form::label('ind25', 'ACTUACIÓN POLICIAL - VEHÍCULOS RECUPERADOS SOLICITADOS',) !!}</td>
              {!! Form::hidden('ind25', 25) !!}
              {!! Form::hidden('name25', ' VEHÍCULOS RECUPERADOS SOLICITADOS',) !!}
          <td>{!! Form::number('amount25', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount25')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>
          <td>{!! Form::text('desc25', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind26', 'ACTUACIÓN POLICIAL - VEHÍCULOS LOCALIZADOS ABANDONADOS',) !!}</td>
              {!! Form::hidden('ind26', 26) !!}
              {!! Form::hidden('name26', ' VEHÍCULOS LOCALIZADOS ABANDONADOS',) !!}
          <td>{!! Form::number('amount26', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount26')
              <span class="text-danger">{{$message}}</span>
              @enderror
          </td>
        <td>{!! Form::text('desc26', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        <tr>
        <td>{!! Form::label('ind27', 'ACTUACIÓN POLICIAL - VEHÍCULOS RETENIDOS ',) !!}</td>
            {!! Form::hidden('ind27', 27) !!}
            {!! Form::hidden('name27', ' VEHÍCULOS RETENIDOS ',) !!}
        <td>{!! Form::number('amount27', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount27')
              <span class="text-danger">{{$message}}</span>
              @enderror
        </td>
        <td>{!! Form::text('desc27', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        <tr>
        <td>{!! Form::label('ind28', 'ACTUACIÓN POLICIAL - MOTOS RECUPERADAS SOLICITADAS',) !!}</td>
            {!! Form::hidden('ind28', 28) !!}
            {!! Form::hidden('name28', ' MOTOS RECUPERADAS SOLICITADAS',) !!}
        <td>{!! Form::number('amount28', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount28')
              <span class="text-danger">{{$message}}</span>
              @enderror
        </td>
        <td>{!! Form::text('desc28', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        <tr>
        <td>{!! Form::label('ind29', 'ACTUACIÓN POLICIAL - MOTOS LOCALIZADAS ABANDONADAS',) !!}</td>
            {!! Form::hidden('ind29', 29) !!}
            {!! Form::hidden('name29', ' MOTOS LOCALIZADAS ABANDONADAS',) !!}
        <td>{!! Form::number('amount29', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount29')
              <span class="text-danger">{{$message}}</span>
              @enderror
        </td>    
        <td>{!! Form::text('desc29', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>
        <tr>
        <td>{!! Form::label('ind30', 'ACTUACIÓN POLICIAL - MOTOS RETENIDAS',) !!}</td>
            {!! Form::hidden('ind30', 30) !!}
            {!! Form::hidden('name30', ' MOTOS RETENIDAS',) !!}
        <td>{!! Form::number('amount30', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount30')
              <span class="text-danger">{{$message}}</span>
              @enderror
        </td>
        <td>{!! Form::text('desc30', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
        </tr>  
          <tr>
        <td>{!! Form::label('ind31', 'ACTUACIÓN POLICIAL - DINERO INCAUTADO (BS)',) !!}</td>
            {!! Form::hidden('ind31', 31) !!}
            {!! Form::hidden('name31', ' DINERO INCAUTADO (BS)',) !!}
        <td>{!! Form::number('amount31', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount31')
              <span class="text-danger">{{$message}}</span>
              @enderror
        </td>
        <td>{!! Form::text('desc31', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
        </tr>
        <tr>
        <td>{!! Form::label('ind32', 'ACTUACIÓN POLICIAL - MERCANCIA RECUPERADA (BS)',) !!}</td>
            {!! Form::hidden('ind32', 32) !!}
            {!! Form::hidden('name32', ' MERCANCIA RECUPERADA (BS)',) !!}
        <td>{!! Form::number('amount32', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
          @error('amount32')
          <span class="text-danger">{{$message}}</span>
          @enderror
        
        </td>
        <td>{!! Form::text('desc32', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
      </tr>
      <tr>
        <td>{!! Form::label('ind33', 'ACTUACIÓN POLICIAL - DROGA INCAUTADA (GRAMOS)',) !!}</td>
            {!! Form::hidden('ind33', 33) !!}
            {!! Form::hidden('name33', ' DROGA INCAUTADA (GRAMOS)',) !!}
        <td>{!! Form::number('amount33', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
          @error('amount33')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </td>
        <td>{!! Form::text('desc33', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
      </tr>
      <tr>
        <td>{!! Form::label('ind34', 'ACTIVIDADES PREVENTIVAS - COLABORACIÓN PRESTADA',) !!}</td>
            {!! Form::hidden('ind34', 34) !!}
            {!! Form::hidden('name34', ' COLABORACIÓN PRESTADA',) !!}
        <td>{!! Form::number('amount34', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
          @error('amount34')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </td>
        <td>{!! Form::text('desc34', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind35', 'ACTIVIDADES PREVENTIVAS - REUNIONES CON LA COMUNIDAD',) !!}</td>
               {!! Form::hidden('ind35', 35) !!}
               {!! Form::hidden('name35', ' REUNIONES CON LA COMUNIDAD',) !!}
          <td>{!! Form::number('amount35', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount35')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc35', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind36', 'ACTIVIDADES PREVENTIVAS - REUNIONES CON LOS GOBIERNOS COMUNITARIOS',) !!}</td>
              {!! Form::hidden('ind36', 36) !!}
              {!! Form::hidden('name36', ' REUNIONES CON LOS GOBIERNOS COMUNITARIOS',) !!}
          <td>{!! Form::number('amount36', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount36')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc36', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind37', 'ACTIVIDADES PREVENTIVAS - REUNIONES ',) !!}</td>
              {!! Form::hidden('ind37', 37) !!}
              {!! Form::hidden('name37', ' REUNIONES ',) !!}
          <td>{!! Form::number('amount37', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount37')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc37', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind38', 'ACTIVIDADES PREVENTIVAS - COORDINACIÓN DE ASISTENCIA SOCIAL',) !!}</td>
              {!! Form::hidden('ind38', 38) !!}
              {!! Form::hidden('name38', ' COORDINACIÓN DE ASISTENCIA SOCIAL',) !!}
          <td>{!! Form::number('amount38', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount38')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc38', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind39', 'ACTIVIDADES PREVENTIVAS - COORDINACIÓN DE SERVICIOS PÚBLICOS',) !!}</td>
              {!! Form::hidden('ind39', 39) !!}
              {!! Form::hidden('name39', ' COORDINACIÓN DE SERVICIOS PÚBLICOS',) !!}
          <td>{!! Form::number('amount39', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount39')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc39', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind40', 'ACTIVIDADES PREVENTIVAS - RECORRIDOS A TERMINALES DE PASAJEROS',) !!}</td>
              {!! Form::hidden('ind40', 40) !!}
              {!! Form::hidden('name40', ' RECORRIDOS A TERMINALES DE PASAJEROS',) !!}
          <td>{!! Form::number('amount40', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount40')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc40', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
            <td>{!! Form::label('ind41', 'ACTIVIDADES PREVENTIVAS - RECORRIDOS A COMERCIOS',) !!}</td>
                {!! Form::hidden('ind41', 41) !!}
                {!! Form::hidden('name41', ' RECORRIDOS A COMERCIOS',) !!}
            <td>{!! Form::number('amount41', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount41')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc41', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
            <td>{!! Form::label('ind42', 'ACTIVIDADES PREVENTIVAS - SUPERVISIÓN A BARES',) !!}</td>
                {!! Form::hidden('ind42', 42) !!}
                {!! Form::hidden('name42', ' SUPERVISIÓN A BARES',) !!}
            <td>{!! Form::number('amount42', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount42')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc42', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
            <td>{!! Form::label('ind43', 'ACTIVIDADES PREVENTIVAS - SUPERVISIÓN A TASCAS',) !!}</td>
                {!! Form::hidden('ind43', 43) !!}
                {!! Form::hidden('name43', ' SUPERVISIÓN A TASCAS',) !!}
            <td>{!! Form::number('amount43', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount43')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc43', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
            <td>{!! Form::label('ind44', 'ACTIVIDADES PREVENTIVAS - SUPERVISIÓN A BODEGONES',) !!}</td>
                {!! Form::hidden('ind44', 44) !!}
                {!! Form::hidden('name44', ' SUPERVISIÓN A BODEGONES',) !!}
            <td>{!! Form::number('amount44', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount44')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc44', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind45', 'ACTIVIDADES PREVENTIVAS - RECORRIDO A MERCADOS POPULARES',) !!}</td>
              {!! Form::hidden('ind45', 45) !!}
              {!! Form::hidden('name45', ' RECORRIDO A MERCADOS POPULARES',) !!}
          <td>{!! Form::number('amount45', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount45')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc45', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind46', 'ACTIVIDADES PREVENTIVAS - RECORRIDOS A CENTROS HOSPITALARIOS',) !!}</td>
              {!! Form::hidden('ind46', 46) !!}
              {!! Form::hidden('name46', ' RECORRIDOS A CENTROS HOSPITALARIOS',) !!}
          <td>{!! Form::number('amount46', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount46')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc46', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind47', 'ACTIVIDADES PREVENTIVAS - RECORRIDOS A ENTIDADES BANCARIAS ',) !!}</td>
              {!! Form::hidden('ind47', 47) !!}
              {!! Form::hidden('name47', ' RECORRIDOS A ENTIDADES BANCARIAS ',) !!}
          <td>{!! Form::number('amount47', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount47')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc47', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind48', 'ACTIVIDADES PREVENTIVAS - RECORRIDO A UNIDADES EDUCATIVAS',) !!}</td>
              {!! Form::hidden('ind48', 48) !!}
              {!! Form::hidden('name48', ' RECORRIDO A UNIDADES EDUCATIVAS',) !!}
          <td>{!! Form::number('amount48', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount48')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc48', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind49', 'ACTIVIDADES PREVENTIVAS - LLAMADAS ATENDIDAS (TELÉFONO DEL CUADRANTE)',) !!}</td>
              {!! Form::hidden('ind49', 49) !!}
              {!! Form::hidden('name49', ' LLAMADAS ATENDIDAS (TELÉFONO DEL CUADRANTE)',) !!}
          <td>{!! Form::number('amount49', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount49')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc49', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind50', 'ACTIVIDADES PREVENTIVAS - RECORRIDOS A TEMPLOS RELIGIOSOS',) !!}</td>
              {!! Form::hidden('ind50', 50) !!}
              {!! Form::hidden('name50', ' RECORRIDOS A TEMPLOS RELIGIOSOS',) !!}
          <td>{!! Form::number('amount50', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount50')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc50', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
            <td>{!! Form::label('ind51', 'ACTIVIDADES PREVENTIVAS - SEGURIDAD DE EVENTOS PÚBLICOS ',) !!}</td>
                {!! Form::hidden('ind51', 51) !!}
                {!! Form::hidden('name51', ' SEGURIDAD DE EVENTOS PÚBLICOS ',) !!}
            <td>{!! Form::number('amount51', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount51')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc51', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
            <td>{!! Form::label('ind52', 'ACTIVIDADES PREVENTIVAS - PATRULLAJE A BALNEARIOS',) !!}</td>
                {!! Form::hidden('ind52', 52) !!}
                {!! Form::hidden('name52', ' PATRULLAJE A BALNEARIOS',) !!}
            <td>{!! Form::number('amount52', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount52')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc52', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
            <td>{!! Form::label('ind53', 'ACTIVIDADES PREVENTIVAS - PATRULLAJE A PARQUES RECREATIVOS ',) !!}</td>
                {!! Form::hidden('ind53', 53) !!}
                {!! Form::hidden('name53', ' PATRULLAJE A PARQUES RECREATIVOS ',) !!}
            <td>{!! Form::number('amount53', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount53')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc53', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>
          </tr>
          <tr>
            <td>{!! Form::label('ind54', 'ACTIVIDADES PREVENTIVAS - PATRULLAJE A PLAZAS ',) !!}</td>
                {!! Form::hidden('ind54', 54) !!}
                {!! Form::hidden('name54', ' PATRULLAJE A PLAZAS ',) !!}
            <td>{!! Form::number('amount54', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
              @error('amount54')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </td>
            <td>{!! Form::text('desc54', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind55', 'ACTIVIDADES PREVENTIVAS - PUNTO DE ATENCIÓN AL CIUDADANO (PAC)',) !!}</td>
              {!! Form::hidden('ind55', 55) !!}
              {!! Form::hidden('name55', ' PUNTO DE ATENCIÓN AL CIUDADANO (PAC)',) !!}
          <td>{!! Form::number('amount55', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount55')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc55', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind56', 'ACTIVIDADES PREVENTIVAS - PUNTO DE OBSERVACIÓN',) !!}</td>
              {!! Form::hidden('ind56', 56) !!}
              {!! Form::hidden('name56', ' PUNTO DE OBSERVACIÓN',) !!}
          <td>{!! Form::number('amount56', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount56')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc56', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind57', 'ACTIVIDADES PREVENTIVAS - CHARLAS DE CONCIENTIZACIÓN ',) !!}</td>
              {!! Form::hidden('ind57', 57) !!}
              {!! Form::hidden('name57', ' CHARLAS DE CONCIENTIZACIÓN ',) !!}
          <td>{!! Form::number('amount57', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount57')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc57', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind58', 'ACTIVIDADES PREVENTIVAS - PERIFONEOS',) !!}</td>
              {!! Form::hidden('ind58', 58) !!}
              {!! Form::hidden('name58', ' PERIFONEOS',) !!}
          <td>{!! Form::number('amount58', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount58')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc58', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind59', 'ACTIVIDADES PREVENTIVAS - PUNTOS ANTISECUESTRO (PUAS))',) !!}</td>
              {!! Form::hidden('ind59', 59) !!}
              {!! Form::hidden('name59', ' PUNTOS ANTISECUESTRO (PUAS))',) !!}
          <td>{!! Form::number('amount59', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount59')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc59', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind60', 'ACTIVIDADES PREVENTIVAS - APOYO JORNADS DE DESINFECCIÓN',) !!}</td>
              {!! Form::hidden('ind60', 60) !!}
              {!! Form::hidden('name60', ' APOYO JORNADS DE DESINFECCIÓN',) !!}
          <td>{!! Form::number('amount60', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount60')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc60', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <td>{!! Form::label('ind61', 'ACTIVIDADES PREVENTIVAS - APOYO JORNADAS DE SALUD',) !!}</td>
              {!! Form::hidden('ind61', 61) !!}
              {!! Form::hidden('name61', 'APOYO JORNADAS DE SALUD',) !!}
          <td>{!! Form::number('amount61', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount61')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc61', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
          <tr>
          <td>{!! Form::label('ind62', 'ACTIVIDADES PREVENTIVAS - PATRULLAJE A ZONAS RESIDENCIALES',) !!}</td>
              {!! Form::hidden('ind62', 62) !!}
              {!! Form::hidden('name62', 'PATRULLAJE A ZONAS RESIDENCIALES',) !!}
          <td>{!! Form::number('amount62', 0, ['class'=>'form-control','placeholder'=>'cantidad']) !!}
            @error('amount62')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </td>
          <td>{!! Form::text('desc62', null, ['class'=>'form-control','placeholder'=>'Ingrese datos de verificacion']) !!}</td>   
          </tr>
        
      </tr>
  </table>
</div>
</div>