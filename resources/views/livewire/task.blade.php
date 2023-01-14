<div>
    <h3 class="text-center text-defualt">My Task ({{$totalTasks}})</h3>
    <table class="table" style="border-color: rgb(2, 59, 52)">
        <thead>
            <tr class="row fs-md text-petrol">
                <th class="col-1">Id</th>
                <th class="col-6">Title</th>
                <th class="col-1">Status</th>
                <th class="col-4"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($tasks as $task)
            <tr class="row fs-md text-defualt">
                <td scope="row" class="col-1">{{ $task->id }}</td>
                <td class="col-6">{{ $task->title }}</td>
                <td class="col-1">
                    <label class="main">
                        <input type="checkbox" wire:click.prevent="editTask({{ $task->id }})"
                        {{ $task->completed == true ? 'checked' : '' }}>
                        <span class="geekmark mt-1"></span>
                    </label>
                </td>
                <td class="col-4 pt-0">
                    <span class="mx-2 btn" wire:click.prevent="destroy({{ $task->id }})">
                        <img src="/icons/trash.svg" alt="">
                    </span>
                    <span class="mx-2 btn">
                        <img src="/icons/edit.svg" alt="" wire:click.prevent="editTaskTitle({{ $task->id }})">
                    </span>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
