<?php

namespace App\Livewire\Pages\Admin;

use App\Models\DeliveryStatus;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout("layouts.app")]
#[Title("Delivery Status")]
class DeliveryStatusById extends Component
{
    public function render()
    {
        $customer_id = request()->route()->parameters["id"];
        return view(
            'livewire.pages.admin.delivery-status-by-id',
            [
                'statuses' => DeliveryStatus::query()->where('customer_id', $customer_id)->get(),
                "customer_id" => $customer_id
            ]
        );
    }
}
