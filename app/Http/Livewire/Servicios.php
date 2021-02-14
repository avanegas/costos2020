<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class Servicios extends Component
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

        return view('livewire.servicios',[
            
            'users' => User::where('name', 'LIKE', $searchParams)
                            ->orwhere('email', 'LIKE', $searchParams)
                            ->latest()->paginate($this->perPage),

            'groups'=> Group::all() 
        ]);
    }

     public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }   
}
