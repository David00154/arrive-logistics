<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Package;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Packages")]
class Packages extends Component
{
    public bool $page = true;
    public function render()
    {
        return view('livewire.pages.admin.packages', [
            'packages' => Package::all()->load("customer")
        ]);
    }
}
