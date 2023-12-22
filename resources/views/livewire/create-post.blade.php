<div class="p-3">
  <div class="card p-3">
  <form wire:submit="add">
    <div class="form-group">
      <label for="name" >Name</label>
      <input type="text" class="form-control mx-auto m-2" id="name" wire:model="form.name">  <div>
        @error('form.name') <span class="error">{{ $message }}</span> @enderror 
      </div>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control mx-auto m-2" id="description" wire:model="form.description">
      <div>
        @error('form.description') <span class="error">{{ $message }}</span> @enderror 
      </div>
    </div>
    <button type="submit" class="btn btn-primary mx-auto m-2">Submit</button>
  </form>
</div>
</div>
