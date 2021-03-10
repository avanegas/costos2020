<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Component;

class CategoriesIndex extends Component
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

        $categories =  Category::where('name', 'LIKE', $searchParams)
                            ->latest('id')
                            ->paginate($this->perPage);
            
        return view('livewire.admin.categories-index', compact('categories'));
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }  
}