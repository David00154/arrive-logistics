<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Customer;
use App\Models\DeliveryStatus;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Update Delivery Status")]
class UpdateDeliveryStatus extends Component
{

    #[Rule("required|string")]
    public string $customer_id;

    #[Rule("required|string")]
    public string $status;

    #[Rule("string")]
    public string $location = '';

    public function submit()
    {
        $validated = $this->validate();
        try {
            $package = DeliveryStatus::create($validated);
            $this->reset();
            session()->flash("success", "Status updated.");
        } catch (\Throwable $th) {
            session()->flash("error", "Can not process request at this time, try again later");
        }
    }

    public function render()
    {
        return view(
            'livewire.pages.admin.update-delivery-status',
            [
                "customers" => Customer::query()->get(),
                "statuses" => ["In Transit to Next Facility", "Notice Left (No Authorized Recipient Available)", "Departed " . env('APP_NAME') . " Regional Facility", "Arrived at " . env("APP_NAME") . " Regional Facility", "Arrived at " . env("APP_NAME") . " Regional Facility", "Failed to Deliver", "Arrived at Target Location"]
            ]
        );
    }
}
