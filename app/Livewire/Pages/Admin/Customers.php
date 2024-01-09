<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Customer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Customers")]
class Customers extends Component
{
    public bool $page = true;

    public function render()
    {
        return view('livewire.pages.admin.customers', [
            'customers' => $this->page ? Customer::all() : Customer::orderBy('id')->paginate(5),
        ]);
    }

    public function assignTrackingId(string $customer_id): void
    {
        $trackingID = $this->generateTrackingID();
        $updated = Customer::where('id', $customer_id)->update(['tracking_id' => $trackingID]);
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
