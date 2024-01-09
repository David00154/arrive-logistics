<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Customer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Customer")]
class GetCustomerById extends Component
{

    public function render()
    {
        $customer_id = request()->route()->parameters['id'];
        return view('livewire.pages.admin.get-customer-by-id', ['customer' => Customer::find($customer_id)]);
    }
}
