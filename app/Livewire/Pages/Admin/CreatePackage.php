<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Customer;
use App\Models\Package;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Create Package")]
class CreatePackage extends Component
{
    #[Rule("required|min:3|max:20")]
    public string $package_name;
    #[Rule("required|min:3|max:30")]
    public string $description;
    #[Rule("required|min:3|max:8")]
    public string $dimensions;
    #[Rule("required|string|min:1")]
    public string $weight;
    #[Rule("required|string")]
    public string $customer_id;
    #[Rule("required|string")]
    public mixed $delivery_date;
    public function render()
    {
        return view('livewire.pages.admin.create-package', [
            'customers' => Customer::all(),
        ]);
    }

    public function submit()
    {
        $validated = $this->validate();

        try {
            Customer::where("id", "=", $validated["customer_id"])->update(["delivery_date" => \DateTime::createFromFormat('Y-m-d\TH:i', $validated['delivery_date'])]);
            $package = Package::create($validated);
            $this->reset();
            session()->flash("success", "Package created.");
        } catch (\Throwable $th) {
            // dd($th);
            session()->flash("error", "Can not process request at this time, try again later");
        }
    }
}
