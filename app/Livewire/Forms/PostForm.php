<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class PostForm extends Form
{
    #[Validate('required|min:3|max:20')]
    public $name = '';
 
    #[Validate('required|min:3|max:20')]
    public $description = '';
}
