<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;


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

    #[Rule('required|numeric')]
    public string $solution = '';

    #[Rule('min:10|max:225')]
    public string $message_ = "";
    public function createQuote()
    {
        $this->dispatch("quote-form:submit");
        sleep(1);
        $validated = $this->validate(attributes: ["name", 'email', "phone", "company", "solution"]);
        $this->reset();
        // dd($validated);
        session()->flash("success", "
            Your estimate request was sent successfully.");
        //code...

    }
    public function render()
    {
        return view('livewire.pages.get-quote');
    }
}
