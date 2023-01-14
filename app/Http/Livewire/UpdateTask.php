<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class UpdateTask extends Component
{
    public $title;
    public $taskid;

    protected $listeners = ['setValues' => 'setTitle'];

    protected $rules = [
        'title' => 'required|min:5',
        'taskid' => 'required',
    ];

    public function render()
    {
        return view('livewire.update-task');
    }

    public function setTitle(Task $task)
    {
        $this->taskid = $task->id;
        $this->title = $task->title;
    }

    public function updateTask()
    {
        $this->validate();
        Task::find($this->taskid)->update(['title' => $this->title]);
        $this->title = '';
        $this->emit('refreshTasks');
    }
}
