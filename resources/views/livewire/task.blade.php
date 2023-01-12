<div>
    {{-- <h3 class="text-center">My Task ({{$totalTasks}})</h3> --}}
    <table class="table" style="border-color: rgb(2, 59, 52)">
        <thead>
            <tr class="fs-md text-petrol">
                <th>Id</th>
                <th>Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr class="fs-md text-defualt">
                <td {{-- scope="row" --}}>{{ "task->id" }}</td>
                <td>{{ "task->title" }}</td>
                <td>{{-- "task->completed" == true ? 'Completed' : 'Pending' --}}Pending</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
