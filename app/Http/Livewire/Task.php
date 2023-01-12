<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public function render()
    {
        $tasks = [
            "id" => "1",
            "title" => "title completed",
            "completed" => 0
        ];
        return view('livewire.task',['tasks' => $tasks]);
    }
}
