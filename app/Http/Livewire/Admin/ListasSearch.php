<?php

namespace App\Http\Livewire\Admin;

use App\Models\Equipo;
use Livewire\Component;
use Livewire\WithPagination;

class ListasSearch extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
        ];

    public $listas = 'equipos';
    public $search = '';
    public $perPage = '10';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        if ($this->listas == 'equipos'){

            $searchParams = '%'.$this->search.'%';

            $equipos = Equipo::where('name','LIKE', $searchParams)
                        ->orWhere('marca','LIKE',$searchParams)
                        ->latest('id')
                        ->paginate($this->perPage);

            return view('livewire.admin.listas-search', compact('equipos'));
        }
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }
}
