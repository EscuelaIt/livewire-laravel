<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;

class Counter extends Component
{

    public $projects;

    public function mount()
    {
        $this->projects = Project::count();
    }

    public function render()
    {
        return <<<'blade'
                <div class="flex items-center space-x-2">
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                  </svg>
                  <span class="text-sm text-gray-500 leading-5 font-medium">{{ $projects }} Projects</span>
                </div>
        blade;
    }
}
