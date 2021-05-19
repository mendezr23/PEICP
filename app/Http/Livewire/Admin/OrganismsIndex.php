<?php

namespace App\Http\Livewire\Admin;

use App\Models\Organism;
use Livewire\Component;


use Livewire\WithPagination;

class OrganismsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme ="bootstrap";
    public function render()
    {

        $organisms = Organism::paginate();
        return view('livewire.admin.organisms-index',compact('organisms'));
    }
}
