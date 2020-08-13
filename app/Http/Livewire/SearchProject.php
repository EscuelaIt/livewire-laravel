<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchProject extends Component
{

    public $search;

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function updatingSearch($value)
    {
        $this->emit('searchProjects', $value);
    }

    public function render()
    {
        return view('livewire.search-project');
    }
}
