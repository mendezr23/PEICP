<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Indicator;
use App\Models\Quadrant;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecordRequest;


class RecordController extends Controller
{

    public function __construct()
    {
      $this->middleware('can:admin.records.index')->only('index');
      $this->middleware('can:admin.records.create')->only('create');
      $this->middleware('can:admin.records.edit')->only('edit','update');
      $this->middleware('can:admin.records.destroy')->only('destroy');

    }

    public function index()
    {
        
        $records = Record::where('user_id',auth()->user()->id)->latest('id')->paginate();
        return view('admin.records.index',compact('records'));
        
    }


    public function create()
    {
        
        {
          
        $indicators = Indicator::all();
        $quadrants = Quadrant::where('user_id',auth()->user()->id)
                              ->selectRaw('CONCAT(nomenclature, " - ", state ," - ",axis," - ",municipality," - ",parish) as fullName, id')
                              ->pluck('fullName','id');
        //$quadrants = Quadrant::where('user_id',auth()->user()->id)->latest('id')->paginate();
        
        return view('admin.records.create',compact('quadrants','indicators'));
        
        
        }
    }

    public function store(StoreRecordRequest $request)
    {
        
       //return $request;
        $request->validate([
            
            'date_regis' => 'required',  
            'user_id'   => 'required',  
            'quadrant_id'   => 'required',
            'ind1'   => 'required',
            'name1'   => 'required',
            'amount1'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind2'   => 'required',
            'name2'   => 'required',
            'amount2'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind3'   => 'required',
            'name3'   => 'required',
            'amount3'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind4'   => 'required',
            'name4'   => 'required',
            'amount4'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind5'   => 'required',
            'name5'   => 'required',
            'amount5'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind6'   => 'required',
            'name6'   => 'required',
            'amount6'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind7'   => 'required',
            'name7'   => 'required',
            'amount7'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind8'   => 'required',
            'name9'   => 'required',
            'amount8'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind9'   => 'required',
            'name9'   => 'required',
            'amount9'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind10'   => 'required',
            'name10'   => 'required',
            'amount10'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind11'   => 'required',
            'name11'   => 'required',
            'amount11'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind12'   => 'required',
            'name12'   => 'required',
            'amount12'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind13'   => 'required',
            'name13'   => 'required',
            'amount13'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind14'   => 'required',
            'name14'   => 'required',
            'amount14'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind15'   => 'required',
            'name15'   => 'required',
            'amount15'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind16'   => 'required',
            'name16'   => 'required',
            'amount16'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind17'   => 'required',
            'name17'   => 'required',
            'amount17'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind18'   => 'required',
            'name18'   => 'required',
            'amount18'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind19'   => 'required',
            'name19'   => 'required',
            'amount19'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind20'   => 'required',
            'name20'   => 'required',
            'amount20'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind21'   => 'required',
            'name21'   => 'required',
            'amount21'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind22'   => 'required',
            'name22'   => 'required',
            'amount22'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind23'   => 'required',
            'name23'   => 'required',
            'amount23'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind24'   => 'required',
            'name24'   => 'required',
            'amount24'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind25'   => 'required',
            'name25'   => 'required',
            'amount25'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind26'   => 'required',
            'name26'   => 'required',
            'amount26'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind27'   => 'required',
            'name27'   => 'required',
            'amount27'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind28'   => 'required',
            'name28'   => 'required',
            'amount28'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind29'   => 'required',
            'name29'   => 'required',
            'amount29'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind30'   => 'required',
            'name30'   => 'required',
            'amount30'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind31'   => 'required',
            'name31'   => 'required',
            'amount31'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind32'   => 'required',
            'name32'   => 'required',
            'amount32'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind33'   => 'required',
            'name33'   => 'required',
            'amount33'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind34'   => 'required',
            'name34'   => 'required',
            'amount34'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind35'   => 'required',
            'name35'   => 'required',
            'amount35'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind36'   => 'required',
            'name36'   => 'required',
            'amount36'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind37'   => 'required',
            'name37'   => 'required',
            'amount37'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind38'   => 'required',
            'name38'   => 'required',
            'amount38'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind39'   => 'required',
            'name39'   => 'required',
            'amount39'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind40'   => 'required',
            'name40'   => 'required',
            'amount40'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind41'   => 'required',
            'name41'   => 'required',
            'amount41'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind42'   => 'required',
            'name42'   => 'required',
            'amount42'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind43'   => 'required',
            'name43'   => 'required',
            'amount43'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind44'   => 'required',
            'name44'   => 'required',
            'amount44'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind45'   => 'required',
            'name45'   => 'required',
            'amount45'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind46'   => 'required',
            'name46'   => 'required',
            'amount46'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind47'   => 'required',
            'name47'   => 'required',
            'amount47'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind48'   => 'required',
            'name48'   => 'required',
            'amount48'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind49'   => 'required',
            'name49'   => 'required',
            'amount49'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind50'   => 'required',
            'name50'   => 'required',
            'amount50'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind51'   => 'required',
            'name51'   => 'required',
            'amount51'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind52'   => 'required',
            'name52'   => 'required',
            'amount52'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind53'   => 'required',
            'name53'   => 'required',
            'amount53'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind54'   => 'required',
            'name54'   => 'required',
            'amount54'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind55'   => 'required',
            'name55'   => 'required',
            'amount55'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind56'   => 'required',
            'name56'   => 'required',
            'amount56'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind57'   => 'required',
            'name57'   => 'required',
            'amount57'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind58'   => 'required',
            'name58'   => 'required',
            'amount58'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind59'   => 'required',
            'name59'   => 'required',
            'amount59'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind60'   => 'required',
            'name60'   => 'required',
            'amount60'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'ind61'   => 'required',
            'name61'   => 'required',
            'amount61'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',    
            'ind62'   => 'required',
            'name62'   => 'required',
            'amount62'   => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/'    
        ]);
        
            
        $record = Record::create($request->all());
        
        return redirect()->route('admin.records.index',$record)->with('info','El registro se creo con èxito');
         }

    public function show(Record $record)
    {
        {
            $indicators = Indicator::all();
            $users = User::all();
            $quadrants = Quadrant::all();
            return view('admin.records.show',compact('record','users','quadrants','indicators'));
        }
    }

    public function edit(Record $records)
    {
        //
    }


    public function update(Request $request, Record $records )
    {
        //
    }

    public function destroy(Record $records)
    {
        //
    }
}
