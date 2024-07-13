<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Customer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\Rule;

#[Layout("layouts.app")]
#[Title("Edit Customer")]
class EditCustomer extends Component
{
    #[Rule("required|min:3|max:50")]
    public string $name = '';

    #[Rule("min:3|max:25")]
    public string $company = '';
    // 

    #[Rule("required|email:strict|max:50")]
    public string $email = '';

    #[Rule("required|max:12")]
    public string $phone = '';

    #[Rule('required')]
    public string $solution = '';

    #[Rule("required|min:3|max:50")]
    public string $address = "";
    public function render()
    {

        // Customer::query()->where('id', '=', $customer_id)->find()
        $customer_id = request()->route()->parameters['id'];
        return view(
            'livewire.pages.admin.edit-customer',
            [
                'customer' => Customer::where("id", "=", $customer_id)->first(),
            ]
        );
    }
    public function update()
    {
        dd($this->only(['name']));
        $customer_id = request()->route()->parameters['id'];
        // $this->dispatch("quote-form:submit");
        $validated = $this->validate();

        try {
            Customer::where("id", "=", $customer_id)->update($validated);
            $this->reset();
            session()->flash("success", "
            Customer updated.");
        } catch (\Throwable $th) {
            session()->flash("error", "Can not process request at this time, try again later");
        }
        // // // dd($validated);


        //code...

    }
}
