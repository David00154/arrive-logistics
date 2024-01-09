<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Edit Customer")]
class EditCustomer extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.edit-customer');
    }
}
