<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Record;
use App\Models\User;
use App\Models\Quadrant;
use Livewire\WithPagination;

class RecordsIndex extends Component
{

    protected $paginationTheme ="bootstrap";
    
    use WithPagination;

    public function render()
    {
        $users = User::all();
        $quadrants = Quadrant::all();
        $records = Record::where('user_id',auth()->user()->id)->latest('id')->paginate();
        //$records = Record::paginate();
               
        return view('livewire.admin.records-index',compact('records','users','quadrants'));

        
    }
    
}
