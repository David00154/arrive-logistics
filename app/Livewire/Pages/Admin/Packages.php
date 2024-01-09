<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Packages")]
class Packages extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.packages');
    }
}
