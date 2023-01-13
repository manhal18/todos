<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public function render()
    {

        $totalTasks = auth()->user()->tasks()->count();
        $tasks = auth()->user()->tasks()->latest()->get();
        return view('livewire.task', [
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }
}
