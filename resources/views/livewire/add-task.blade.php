<div>
    <h3 class="text-center text-defualt">Add New Task</h3>


    <div class="form-group">
        <input type="text" wire:model="title" class="form-control my-4">
    </div>

    <div class="form-group">
        <button wire:click.prevent="addTask" class="btn w-100 border-2 rounded-2"
         style="border-color: rgb(136, 164, 124)"><b class="text-defualt"> Add </b></button>
    </div>
    </form>
</div>
