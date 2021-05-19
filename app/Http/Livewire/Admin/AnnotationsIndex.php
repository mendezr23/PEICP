<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Record;
use App\Models\Quadrant;
use App\Models\User;

class AnnotationsIndex extends Component
{
    protected $paginationTheme ="bootstrap";
    
    public $search;
    
    public function updatingSearch(){

        $this->resetPage();
    }    
    
    use WithPagination;
    

    public function render()
    {
            $user = User::all();
            $quadrant = Quadrant::all();
            $records = Record::where('quadrant_id', 'LIKE', '%' . $this->search . '%')
                              ->orwhere('user_id', 'LIKE', '%' . $this->search . '%')->paginate(10);    
            return view('livewire.admin.annotations-index',compact('records','user','quadrant'));
    }
}
