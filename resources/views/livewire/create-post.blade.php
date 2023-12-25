<div class="p-3">
    <div class="card p-3">
        @if ($update_data == true)
            <form wire:submit="update">
            @else
                <form wire:submit="add">
        @endif
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control mx-auto m-2" id="name" wire:model="form.name">
            <div>
                @error('form.name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control mx-auto m-2" id="description" wire:model="form.description">
            <div>
                @error('form.description')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        @if ($update_data == true)
            <button type="sumbit" class="btn btn-primary mx-auto m-2">Update</button>
            <button class="btn btn-danger mx-auto m-2" wire:click="$refresh">Cancel</button>
        @else
            <button type="submit" class="btn btn-primary mx-auto m-2">Add</button>
        @endif
        </form>
    </div>
</div>
