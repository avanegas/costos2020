<?php

namespace App\Http\Livewire\Admin;

use Spatie\Permission\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RoleIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search = '';
    public $perPage = '10';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchParams = '%' . $this->search . '%';

        $roles =  Role::where('name', 'LIKE', $searchParams)
            ->latest('id')
            ->paginate($this->perPage);

        return view('livewire.admin.role-index', compact('roles'));
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }      
}