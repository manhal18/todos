<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    protected $listeners = ['refreshTasks' => '$refresh'];

    public function render()
    {
        $totalTasks = auth()->user()->tasks()->count();
        $tasks = auth()->user()->tasks()->latest()->get();
        return view('livewire.task', [
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }

    public function editTask(TaskModel $task)
    {
        $new = ($task->completed == 0)? 1 : 0;
        $task->update(['completed' => $new]);
        $this->emit('refreshTasks');
    }

    public function editTaskTitle($id)
    {
        $this->emit('setValues',$id);
    }

    public function destroy($id)
    {
        TaskModel::find($id)->delete();
        $this->emit('refreshTasks');
    }
}
