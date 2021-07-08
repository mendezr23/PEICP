<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\Indicator;
use App\Models\Quadrant;
use App\Models\User;
use Illuminate\Http\Request;



class PeriodController extends Controller
{

    public function __construct()
    {
      $this->middleware('can:admin.periods.index')->only('index');
      $this->middleware('can:admin.periods.edit')->only('edit','update');
      $this->middleware('can:admin.periods.show')->only('show');

    }

    public function index()
    {
        
        return view('admin.periods.index');
        
    }

    public function create()
    {
        
        {
          
        $indicators = Indicator::all();
        $quadrants = Quadrant::where('user_id',auth()->user()->id)
                              ->selectRaw('CONCAT(nomenclature, " - ", state ," - ",axis," - ",municipality," - ",parish) as fullName, id')
                              ->pluck('fullName','id');
        
        return view('admin.periods.create',compact('quadrants','indicators'));
        
        
        }
    }

    
    public function show(Period $period)
    {
     
        
        {
            $indicators = Indicator::all();
            $users = User::all();
            $quadrants = Quadrant::all();
            
            //dd($total);
            return view('admin.periods.show',compact('period','users','quadrants','indicators'));
        }
    }
  

}
