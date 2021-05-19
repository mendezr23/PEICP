<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Indicator;
use Livewire\WithPagination;

class IndicatorsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme ="bootstrap";

    public $search;    

    public function updatingSearch(){

        $this->resetPage();
    }

    public function render()
    {
        $indicators = Indicator::where('id','like', '%'.$this->search.'%')
                    ->paginate(10);
        
        return view('livewire.admin.indicators-index',compact('indicators'));

        
    }
}
