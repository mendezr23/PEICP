<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function __construct()
    {
      $this->middleware('can:admin.types.index')->only('index');
      $this->middleware('can:admin.types.create')->only('create');
      $this->middleware('can:admin.types.edit')->only('edit','update');
      $this->middleware('can:admin.types.destroy')->only('destroy');

    }    

    
    public function index()
    {
        
        $types =Type::paginate();
        return view('admin.types.index',compact('types'));
    }

    
    public function create()
    {
        return view('admin.types.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            
        ]);
        
        $type = Type::create($request->all());
        return redirect()->route('admin.types.edit',$type)->with('info','El tipo de cuadrante se creo con èxito');
    }
  
    public function edit(Type $type)
    {
        return view('admin.types.edit',compact('type'));
    }

    
    public function update(Request $request, Type $type)
    {
        $request->validate([

            'name' => 'required',
            
        ]);
        $type->update($request->all());
        return redirect()->route('admin.types.edit',$type)->with('info','El tipo de cuadrante se actualizo con èxito');
    }

    
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.types.index')->with('info','El tipo de cuadrante se elimino con exito');
    }
}
