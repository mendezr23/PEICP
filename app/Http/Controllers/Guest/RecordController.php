<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Indicator;
use Illuminate\Http\Request;
use App\Models\Quadrant;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    public function __construct()
    {
      $this->middleware('can:guest.periods.index')->only('index');
      $this->middleware('can:guest.periods.create')->only('create');
      $this->middleware('can:guest.periods.show')->only('show');
      

    }
    
    public function index()
    {
        
    }

    
    public function create()
    {
        $indicators = Indicator::all();
        $quadrants = Quadrant::where('user_id',auth()->user()->id)
                              ->selectRaw('CONCAT(nomenclature, " - ", state ," - ",axis," - ",municipality," - ",parish) as fullName, id')
                              ->pluck('fullName','id');
        
        return view('guest.records.create',compact('indicators','quadrants'));
    }

    
    public function store(Request $request)
    {
        
        $user_id = $request->user_id;
        $date_regis = $request->date_regis;
        $quadrant_id = $request->quadrant_id;
        $indicator_id = $request->indicator_id;
        $amount = $request->amount;
        $observation = $request->observation;
        
        for ($i=0; $i <count($indicator_id) ; $i++) {                  

        $datasave   =  [

            'user_id'=>$user_id[$i],
            'date_regis'=>$date_regis[$i],
            'quadrant_id'=>$quadrant_id[$i],
            'indicator_id'=>$indicator_id[$i],
            'amount'=>$amount[$i],
            'observation'=>$observation[$i],
            
        ];
        
        //return dd($datasave);
        //return $request;

        $request->validate([
            
            'user_id'   => 'required',
            'date_regis' => 'required',    
            'quadrant_id'   => 'required',
            'indicator_id'   => 'required',          
        ]);
        
         DB::table('records')->insert($datasave);   
        }
    }
    
    public function show($id)
    {
        //
    }

    
}
