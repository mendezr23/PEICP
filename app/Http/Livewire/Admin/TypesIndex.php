<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Type;
use Livewire\WithPagination;

class TypesIndex extends Component
{

    use WithPagination;

    protected $paginationTheme ="bootstrap";
    
    public function render()
    {
        $types =Type::paginate();
        return view('livewire.admin.types-index',compact('types'));
    }
}
