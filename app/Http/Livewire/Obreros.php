<?php

namespace App\Http\Livewire;

use App\Models\Obrero;
use Livewire\Component;
use Livewire\WithPagination;

class Obreros extends Component
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
        $searchParams = '%'.$this->search.'%';

        return view('livewire.obreros', [
            'obreros' => Obrero::where('name','LIKE', $searchParams)
                ->with(['grupo_obrero'])->latest()->paginate($this->perPage)
        ]);
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }
}
