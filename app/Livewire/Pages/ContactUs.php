<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\{Layout, Rule, Title};
use Livewire\Component;

#[Layout("layouts.guest")]
#[Title("Contact Us")]
class ContactUs extends Component
{

    #[Rule("required|min:3|max:50")]
    public string $name = '';

    #[Rule("required|email:strict|max:50")]
    public string $email = '';

    #[Rule("required|min:12")]
    public string $phone = '';

    #[Rule("required|min:3|max:50")]
    public string $subject = '';

    #[Rule('required|min:5|max:225')]
    public string $message_ = "";


    public function render()
    {
        return view('livewire.pages.contact-us');
    }
    public function submitForm()
    {
        $validated = $this->validate(attributes: []);
        dd($validated);
    }
}
