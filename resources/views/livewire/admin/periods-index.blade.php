<div>
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
                 <th colspan="1"></th>
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
                 <td>{{$period->indicators->sum('pivot.amount')}}</td>
                 <td>{{Carbon\Carbon::parse($period->date_regis)->format('d-m-Y')}}</td>
                 <td width="10px">
                 <a class="btn btn-sm" href="{{route('admin.periods.show',$period)}}"><i class="fab fa-r-project"></i></a>
                 </td>
             </tr>
             @endforeach
         </tbody>
      </table>
     </div>
     <div class="card-footer">
         {{$periods->links()}}
         
     </div>
 </div>
</div>
