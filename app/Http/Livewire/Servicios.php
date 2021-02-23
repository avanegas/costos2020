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
    public $groups;
    public Group $group;
    
    public function mount()
    {
        $this->groups = Group::orderBy('name', 'asc')->get();
        $this->group  = Group::first();
    }

    public function render()
    {
        $searchParams = '%' . $this->search . '%';

        $users = $this->group->users()->where('name', 'LIKE', $searchParams)
                        ->orwhere('email', 'LIKE', $searchParams)
                        ->latest()->paginate($this->perPage);

        return view('livewire.servicios', compact('users'));
    }

    public function servicio(Group $group){
        $this->group = $group;
        $this->users = $this->group->users()->paginate($this->perPage);
        //dd($this->group, $this->users);
    }

     public function clear() {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }

}
