<div>
    <h3 class="text-center text-defualt mt-5">Update Task</h3>


    <div class="form-group">
        <input id="txt" type="text" wire:model="title" class="form-control my-4" required>
        @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <button id="Button" wire:click.prevent="updateTask" class="btn w-100 border-2 rounded-2"
         style="border-color: rgb(136, 164, 124)" {{ !empty($title) ? '' : 'disabled' }}>
         <b class="text-defualt"> Update </b></button>
    </div>
    </form>
</div>
