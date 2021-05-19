<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Indicator;


class IndicatorController extends Controller
{

    public function __construct()
    {
      $this->middleware('can:admin.indicators.index')->only('index');
      $this->middleware('can:admin.indicators.create')->only('create');
      $this->middleware('can:admin.indicators.edit')->only('edit','update');
      $this->middleware('can:admin.indicators.destroy')->only('destroy');

    }    

    public function index()
    {
       

        $indicators = Indicator::paginate();
        return view('admin.indicators.index',compact('indicators'));
    }


    public function create()
    {
        return view('admin.indicators.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([

            'activity' => 'required',
            'action'   => 'required'
        ]);
        
        $indicator = Indicator::create($request->all());
        return redirect()->route('admin.indicators.edit',$indicator)->with('info','El indicador se creo con èxito');
    }


    public function edit(Indicator $indicator)
    {
        return view('admin.indicators.edit',compact('indicator'));
    }

    
    public function update(Request $request, Indicator $indicator)
    {
        $request->validate([

            'activity' => 'required',
            'action'   => 'required'
        ]);
        $indicator->update($request->all());
        return redirect()->route('admin.indicators.edit',$indicator)->with('info','El indicador se actualizo con èxito');
    }

    
    public function destroy(Indicator $indicator)
    {
        $indicator->delete();
        return redirect()->route('admin.indicators.index')->with('info','El indicador se elimino con exito');
    }
}
