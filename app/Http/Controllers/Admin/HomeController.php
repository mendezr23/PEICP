<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organism;
use App\Models\Quadrant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        
        $quadrants = Quadrant::count();
        $organisms = Organism::count();
        
        //$users = User::count();
        return view('admin.index',compact('quadrants','organisms'));
        
    }
}
