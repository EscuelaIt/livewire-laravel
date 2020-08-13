<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;

class Projects extends Component
{
    public $page;
    public $projects;

    protected $listeners = ['searchProjects'];

    public function mount()
    {
        $this->page = 'Prueba curso';
        $this->projects = Project::all();
    }

    public function addStar($project)
    {
        $project = Project::find($project);
        $project->starred = ($project->starred == 1 ? 0 : 1);
        $project->save();
    }

    public function changeOrder($order)
    {
        $this->projects = Project::orderBy($order, 'asc')->get();
    }

    public function searchProjects($search)
    {
        $this->projects = Project::where('name', 'like', '%' . $search . '%')->get();
    }

    public function render()
    {
        return view('livewire.projects');
    }
}
