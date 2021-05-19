<?php

namespace App\Http\Livewire\Admin;

use App\Models\Organism;
use Livewire\Component;
use App\Models\Quadrant;
use App\Models\Type;
use Livewire\WithPagination;

class QuadrantsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme ="bootstrap";

    public $search;    

    public function updatingSearch(){

        $this->resetPage();
    }

    public function render()
    {
        $types = Type::all();
        $organisms = Organism::all();
        $quadrants = Quadrant::where('id','like', '%'.$this->search.'%')
                                ->orwhere('nomenclature','like', '%'.$this->search.'%')
                                ->orwhere('state','like', '%'.$this->search.'%')
                                ->paginate(10);
        
        return view('livewire.admin.quadrants-index',compact('quadrants','types','organisms'));

        
    }
}
