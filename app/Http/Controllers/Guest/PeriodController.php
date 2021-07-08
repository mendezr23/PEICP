<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\User;
use App\Models\Quadrant;
use App\Models\Indicator;
use App\Models\Indicator_period;
use App\Http\Requests\StoreRecordRequest;


class PeriodController extends Controller
{
    public function __construct()
    {
      $this->middleware('can:guest.periods.index')->only('index');
      $this->middleware('can:guest.periods.create')->only('create');
      $this->middleware('can:guest.periods.edit')->only('edit','update');
      $this->middleware('can:guest.periods.show')->only('show');

    }

     public function index()
    {
        $period = Period::where('user_id',auth()->user()->id)->latest('id')->paginate();
        return view('guest.periods.index',compact('period'));
    }

    
    public function create()
    {
        $indicators = Indicator::all();
        $quadrants = Quadrant::where('user_id',auth()->user()->id)
                              ->selectRaw('CONCAT(nomenclature, " - ", state ," - ",axi_id," - ",municipality_id," - ",parish) as fullName, id')
                              ->pluck('fullName','id');
        //$quadrants = Quadrant::where('user_id',auth()->user()->id)->latest('id')->paginate();
        
        return view('guest.periods.create',compact('quadrants','indicators'));
    }

    
    public function store(StoreRecordRequest $request)
    {

        $request->validate([
        'date_regis'    => ['required'],
        'quadrant_id'    => ['required'], ]);
        $data = $request->all();

      //dd($data);
        $indicators = new Period;
        $indicators->user_id = $data['user_id'];   
        $indicators->date_regis = $data['date_regis'];   
        $indicators->quadrant_id = $data['quadrant_id'];
        $indicators->save();

     if (count($data) > 0)
          {
                foreach ($data['indicators'] as $item => $value) 
                {
                    
                        $date2= array(
                            'period_id' => $indicators->id,
                            'indicator_id' => $data['indicators'][$item],
                            'amount' => $data['amount'][$item],
                            'observation' => $data['observation'][$item],
                        );
                        Indicator_period::create($date2);
                 }
           }
           return redirect()->route('guest.periods.index')->with('info','Se proceso el indicador con èxito');
        }   
    
            public function show(Period $period)
    {
            $indicators = Indicator::all();
            $users = User::all();
            $quadrants = Quadrant::all();
            
            return view('guest.periods.show',compact('period','users','quadrants','indicators'));

    }

}
