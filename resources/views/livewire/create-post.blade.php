<div class="p-3">
    <div class="card p-3">
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
        <div class="item-center">
            @if ($update_data == true)
            <button type="sumbit" class="btn btn-primary mx-auto m-2" wire:click="update">Update</button>
            <button class="btn btn-danger mx-auto m-2" wire:click="$refresh">Cancel</button>
            @else
            <button type="submit" class="btn btn-primary mx-auto m-2" wire:click="add">Add</button>
            @endif
        </div>
    </div>
</div>
