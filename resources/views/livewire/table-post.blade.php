<div class="mt-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Post</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $key => $item)
                <div>
                    <tr>
                        <th>{{ $post->firstItem() + $key }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <button class="btn btn-info" wire:click="update({{ $item->id }})">Update</button>
                            <button class="btn btn-danger" wire:click="delete({{ $item->id }})">Delete</button>
                        </td>
                    </tr>
                </div>
            @endforeach
        </tbody>
    </table>
    {{ $post->links() }}

</div>
