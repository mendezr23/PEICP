<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organism;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Quadrant;
use App\Models\User;



class QuadrantController extends Controller
{

    public function __construct()
    {
      $this->middleware('can:admin.quadrants.index')->only('index');
      $this->middleware('can:admin.quadrants.create')->only('create');
      $this->middleware('can:admin.quadrants.edit')->only('edit','update');
      $this->middleware('can:admin.quadrants.destroy')->only('destroy');

    }
    

    protected $paginationTheme ="bootstrap";
    
    public function index()
    {
        $quadrants = Quadrant::all();
        $types = Type::all();
        $organisms = Organism::all();
        return view('admin.quadrants.index',compact('quadrants','types','organisms'));
    }

    public function create()
    {
        $types = Type::pluck('name','id');
        $organisms = Organism::pluck('name','id');
        $users = User::pluck('name','id');

        return view('admin.quadrants.create',compact('types','organisms','users'));
    }


    public function store(Request $request)
    {
      


        $request->validate([

            'number' => 'required',
            'type_id'   => 'required',
            'nomenclature'   => 'required',
            'area'   => 'required',
            'perimeter'   => 'required',
            'region'   => 'required',
            'state'   => 'required',
            'axis'   => 'required',
            'municipality'   => 'required',
            'parish'   => 'required',
            'town'   => 'required',
            'sector'   => 'required',
            'organism_id'   => 'required',
            'user_id'   => 'required'
        ]);

        
        $quadrant = Quadrant::create($request->all());
        return redirect()->route('admin.quadrants.edit',$quadrant)->with('info','El Cuadrante se creo con èxito');
        
    }

    
    public function show(Quadrant $quadrant)
    {
        
        return view('admin.quadrants.show',compact('quadrant'));
    }

    
    public function edit(Quadrant $quadrant)

    {
        $types = Type::pluck('name','id');
        $organisms = Organism::pluck('name','id');
        $users = User::pluck('name','id');

        return view('admin.quadrants.edit',compact('quadrant','types','organisms','users'));
    }

    
    public function update(Request $request, Quadrant $quadrant)
    {
        $request->validate([

            'number' => 'required',
            'type_id'   => 'required',
            'nomenclature'   => 'required',
            'area'   => 'required',
            'perimeter'   => 'required',
            'region'   => 'required',
            'state'   => 'required',
            'axis'   => 'required',
            'municipality'   => 'required',
            'parish'   => 'required',
            'town'   => 'required',
            'sector'   => 'required',
            'organism_id'   => 'required',
            'user_id'   => 'required'
        ]);
        $quadrant->update($request->all());
        return redirect()->route('admin.quadrants.edit',$quadrant)->with('info','Se actualizo el cuadrante con èxito');
    }


    public function destroy(Quadrant $quadrant)
    {
        $quadrant->delete();
        return redirect()->route('admin.quadrants.index',$quadrant)->with('info','El indicador se elimino con exito');
    }
}
