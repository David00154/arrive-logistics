<?php

namespace App\Livewire\Pages;

use App\Models\Customer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;


class GetQuote extends Component
{

    public array $solutions = [
        ["title" => "Air Fowarding", "value" => 1],
        ["title" => "Sea Fowarding", "value" => 2],
        ["title" => "Land Fowarding", "value" => 3],
        ["title" => "Warehousing & Storage", "value" => 4],
    ];

    #[Rule("required|min:3|max:50")]
    public string $name = '';

    #[Rule("min:3|max:25")]
    public string $company = '';
    // 

    #[Rule("required|email:strict|max:50")]
    public string $email = '';

    #[Rule("required|min:12")]
    public string $phone = '';

    #[Rule('required')]
    public string $solution = '';

    #[Rule("required|min:3|max:50")]
    public string $address = "";
    public function createQuote()
    {
        $this->dispatch("quote-form:submit");
        $validated = $this->validate();

        try {
            $customer = Customer::create($validated);
            $this->reset();
            session()->flash("success", "
            Your estimate request was sent successfully.");
        } catch (\Throwable $th) {
            $this->reset();
            session()->flash("error", "Can not process request at this time, try again later");
        }
        // // // dd($validated);


        //code...

    }
    public function render()
    {
        return view('livewire.pages.get-quote');
    }
}
