<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\Quadrant;
use App\Models\Indicator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecordRequest;

use function PHPSTORM_META\map;

class PeriodController extends Controller
{
    
    public function index()
    {
        $periods = Period::where('user_id',auth()->user()->id)->latest('id')->paginate();
        return view('guest.periods.index',compact('periods'));
    }

    
    public function create()
    {
        $indicators = Indicator::all();
        $quadrants = Quadrant::where('user_id',auth()->user()->id)
                              ->selectRaw('CONCAT(nomenclature, " - ", state ," - ",axis," - ",municipality," - ",parish) as fullName, id')
                              ->pluck('fullName','id');
        //$quadrants = Quadrant::where('user_id',auth()->user()->id)->latest('id')->paginate();
        
        return view('guest.periods.create',compact('quadrants','indicators'));
    }

    
   
    public function store(StoreRecordRequest $request)
    {
        
        $period = Period::create($request->all());
        if($request->indicators)

        $indicadors=$request->indicators;
	    foreach($indicadors as $indicator){

        $period->indicators()->attach($indicator, ['amount' => 100, 'observation' => 'texto']);
    }
        //return $request;
    }

      
    public function show($id)
    {
        //
    }

   

    public function edit(Period $period)
    {
        return view('guest.periods.edit',compact('period'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Period $period)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
