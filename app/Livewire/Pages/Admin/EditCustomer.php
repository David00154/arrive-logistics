<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Customer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Edit Customer")]
class EditCustomer extends Component
{
    public function render()
    {

        // Customer::query()->where('id', '=', $customer_id)->find()
        $customer_id = request()->route()->parameters['id'];
        return view(
            'livewire.pages.admin.edit-customer',
            [
                'customer' => Customer::query()->find($customer_id),
            ]
        );
    }
}
