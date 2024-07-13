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
    public function assignTrackingId(string $customer_id): void
    {
        $trackingID = $this->generateTrackingID();
        $updated = Customer::where('id', $customer_id)->update(['tracking_id' => $trackingID]);
        $this->redirect("/customer/" . $customer_id);
    }

    private function generateTrackingID($length = 10)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $trackingID = '';

        for ($i = 0; $i < $length; $i++) {
            $trackingID .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $trackingID;
    }
}
