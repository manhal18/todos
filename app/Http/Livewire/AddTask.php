<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddTask extends Component
{
    public $title;

    protected $rules = [
        'title' => 'required|min:5',
    ];

    public function render()
    {
        return view('livewire.add-task');
    }

    public function addTask()
    {
        $this->validate();

        auth()->user()->tasks()->create([
            'title' => $this->title
        ]);

        $this->title = "";

        $this->emit('refreshTasks');
    }
}
