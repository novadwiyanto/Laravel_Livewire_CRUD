## Laravel_Livewire

* Laravel 10
* Livewire 3


## Guide to Build

[Materi](https://livewire.laravel.com/docs/quickstart)

### Make Component

`php artisan make:livewire *ComponentName*`


### Controller -> Livewire

`#[Layout('layouts.app')]`
`#[Title('Create Post')] `
`#[Locked]`
`#[Computed]`
`#[Js]`
`#[Renderless]`
`#[Validate]`
`#[Modelable]`
`#[Url]`
`#[On('dispatching-name')]`

`$this->dispatch('dispatching-name');`

`$this->reset();`

```
public PostForm $form;
public ?Post $post;
```

* **Create**

        Post::create($this->form->validate());
        
* **Update**

        $this->post = Post::where('id', $id)->first();
        $this->post->update($this->form->validate());
        
* **Delete**

        $post = Post::where('id', $id)->first();
        $post->delete();


### View -> Livewire

To call livewire component

```
<livewire:*component-name />
```


### Form Object

For Validation and Rule

`php artisan livewire:form PostForm`
