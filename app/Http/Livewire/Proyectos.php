<?php

namespace App\Http\Livewire;

use App\Models\Proyecto;
use Livewire\WithPagination;
use Livewire\Component;

class Proyectos extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public $search = '';
    public $perPage = '10';

    public function render()
    {
        $searchParams = '%' . $this->search . '%';

        return view('livewire.proyectos',[
                    'proyectos' => Proyecto::where('name', 'LIKE', $searchParams)
                                        ->orWhere('contratante', 'LIKE', $searchParams)
                                        ->orWhere('ubicacion', 'LIKE', $searchParams)
                                        ->orWhere('oferente', 'LIKE', $searchParams)
                                        ->latest()->paginate($this->perPage)              
        ]);
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }
}
