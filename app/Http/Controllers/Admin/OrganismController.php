<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organism;


class OrganismController extends Controller
{
    public function __construct()
    {
      $this->middleware('can:admin.organisms.index')->only('index');
      $this->middleware('can:admin.organisms.create')->only('create');
      $this->middleware('can:admin.organisms.edit')->only('edit','update');
      $this->middleware('can:admin.organisms.destroy')->only('destroy');

    }    

    protected $paginationTheme ="bootstrap";
    
    public function index()
    {
        
        $organisms = Organism::paginate();
        return view('admin.organisms.index',compact('organisms'));
        
    }

   
    public function create()
    {
        return view('admin.organisms.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            
        ]);
        
        $organism = Organism::create($request->all());
        return redirect()->route('admin.organisms.edit',$organism)->with('info','El Organismo se creo con èxito');
    
    }
   
    public function edit(Organism $organism)
    {
        return view('admin.organisms.edit',compact('organism'));
    }

    public function update(Request $request, Organism $organism)
    {
        $request->validate([

            'name' => 'required',
            
        ]);
        $organism->update($request->all());
        return redirect()->route('admin.organisms.edit',$organism)->with('info','El organismo se actualizo con èxito');
    }

    
    public function destroy(Organism $organism)
    {
        $organism->delete();
        return redirect()->route('admin.organisms.index')->with('info','El organismo se elimino con exito');
    }
}
