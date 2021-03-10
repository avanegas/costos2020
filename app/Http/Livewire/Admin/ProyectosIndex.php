<?php

namespace App\Http\Livewire\Admin;

use App\Models\Proyecto;
use Livewire\Component;
use Livewire\WithPagination;

class ProyectosIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public $search = '';
    public $perPage = '10';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchParams = '%' . $this->search . '%';

        $proyectos = Proyecto::where('name', 'LIKE', $searchParams)
            ->orWhere('contratante', 'LIKE', $searchParams)
            ->orWhere('ubicacion', 'LIKE', $searchParams)
            ->orWhere('oferente', 'LIKE', $searchParams)
            ->paginate($this->perPage);

        return view('livewire.admin.proyectos-index', compact('proyectos'));
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }  
}