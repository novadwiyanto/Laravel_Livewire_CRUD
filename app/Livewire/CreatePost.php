<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\Forms\PostForm;


class CreatePost extends Component
{
    public PostForm $form;
    public ?Post $post;
    public $update_data = false;

    public function add()
    {
        Post::create(
            $this->form->validate()
        );

        $this->form->reset();
        $this->dispatch('post-created');
    }

    #[On('edit-post')]
    public function edit($id)
    {
        $this->post = Post::where('id', $id)->first();
        $this->form->name = $this->post->name;
        $this->form->description = $this->post->description;
        $this->update_data = true;
    }

    public function update()
    {
        $this->post->update($this->form->validate());

        $this->update_data = false;
        $this->form->reset();
        $this->dispatch('post-updated');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
