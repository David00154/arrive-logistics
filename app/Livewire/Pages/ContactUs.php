<?php

namespace App\Livewire\Pages;

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\{Layout, Rule, Title};
use Livewire\Component;
use Symfony\Component\Mailer\Exception\TransportException;

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

    #[Rule('required|min:3|max:225')]
    public string $message_ = "";


    public function render()
    {
        return view('livewire.pages.contact-us');
    }
    public function submitForm()
    {
        sleep(1);
        $validated = $this->validate();
        try {
            Mail::to(env("MAIL_USERNAME"))->send(new ContactUsMail($validated['name'], $validated['email'], $validated['subject']));
            session()->flash('success', 'Message Submitted');
            $this->reset();
        } catch (TransportException $e) {
            session()->flash('error', "Unable to send message at this time.");
        } catch (\Exception $th) {
            //throw $th;
            session()->flash('error', "Internal Server Error");
        }
        // dd($validated);
    }
}
