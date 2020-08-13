<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;

class CreateProject extends Component
{

    public $name;
    public $category;
    public $repo;
    public $uri;
    public $country;

    public function mount()
    {
        $this->country = 'Spain';
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'category' => 'required',
            'repo' => 'required',
            'uri' => 'required',
            'country' => 'required',
        ]);

        // Execution doesn't reach here if validation fails.

        Project::create([
            'name' => $this->name,
            'category' => $this->category,
            'repo' => $this->repo,
            'uri' => $this->uri,
            'country' => $this->country,
        ]);

        $this->reset();
        // $this->emit('close-form');
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->emit('close-form');
    }

    public function render()
    {
        return view('livewire.create-project');
    }
}
