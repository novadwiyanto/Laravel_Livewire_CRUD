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

    #[On('post-created')]
    
    // public function delete($id) {
    //     $post = Post::where('id', $id)->first();
 
 
    //     $post->delete();
    // }
    
    public function render()
    {
        return view('livewire.table-post', ['post' => Post::latest()->paginate(5)]);
    }
}
