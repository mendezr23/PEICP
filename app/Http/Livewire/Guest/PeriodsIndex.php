<?php

namespace App\Http\Livewire\Guest;


use Livewire\Component;
use App\Models\User;
use App\Models\Quadrant;
use App\Models\Period;
use Livewire\WithPagination;

class PeriodsIndex extends Component
{
    protected $paginationTheme ="bootstrap";
    
    use WithPagination;

    public function render()
    {
        $users = User::all();
        $quadrants = Quadrant::all();
        $periods = Period::where('user_id',auth()->user()->id)->latest('id')->paginate(5);
        //$records = Record::paginate();
               
        return view('livewire.guest.periods-index',compact('periods','users','quadrants'));

        
    }
}
