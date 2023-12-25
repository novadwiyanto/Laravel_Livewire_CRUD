<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class TablePost extends Component
{
    use WithPagination;
    protected $paginationTheme = 'Bootstrap';

    public function delete($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();
    }

    public function update($id)
    {
        $this->dispatch('edit-post', id: $id);
    }

    #[On('post-created')]
    #[On('post-updated')]
    public function render()
    {
        $post = Post::latest()->paginate(5);
        return view('livewire.table-post', ['post' => $post]);
    }
}
