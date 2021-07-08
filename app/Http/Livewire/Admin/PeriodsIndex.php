<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Period;
use App\Models\User;
use App\Models\Quadrant;
use Livewire\WithPagination;


class PeriodsIndex extends Component
{

    protected $paginationTheme ="bootstrap";
    
    use WithPagination;

    public function render()
    {
        $users = User::all();
        $quadrants = Quadrant::all();
        $periods = Period::orderBy('id', 'desc')->paginate(10);
      
        //$records = Record::paginate();
               
        return view('livewire.admin.periods-index',compact('periods','users','quadrants'));
        
    }
    
}
