<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Livewire\Forms\PostForm;


class CreatePost extends Component
{   
    public PostForm $form;

    public function add()
    {
        Post::create(
            $this->form->validate()
        );

        $this->reset();
        $this->dispatch('post-created');
        
    }

    public function render()
    {

        $post = Post::all();
        return view('livewire.create-post', ['post' => $post]);
        
    }
}
