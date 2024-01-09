<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Customer;
use App\Models\Package;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;

#[Layout("layouts.app")]
#[Title("Customer")]
class GetPackageById extends Component
{
    public function render()
    {
        $customer_id = request()->route()->parameters['id'];
        return view('livewire.pages.admin.get-package-by-id', ['packages' => Customer::find($customer_id)->packages]);
    }
}
