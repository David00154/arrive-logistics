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

    #[Rule("required|max:15")]
    public string $phone = '';

    #[Rule("required|min:3|max:50")]
    public string $subject = '';

    #[Rule('required|min:3|max:225')]
    public string $message_ = "";

    public static function fixMailBody(string $body): string
    {
        // $body = str_replace("","", $body);
        if ($body == "") {
            return "<br>";
        } else {
            return "<p style=\"color:#000000;margin: 0 0 0px\">" . $body . "</p>";
        }
    }

    public function render()
    {
        return view('livewire.pages.contact-us');
    }
    public function submitForm()
    {
        $validated = $this->validate();
        dd(explode("\n", $validated["message_"]));
        $validated['message_'] = join('', array_map("App\Livewire\Pages\ContactUs::fixMailBody", explode("\n", $validated["message_"])));
        try {
            Mail::to(env("MAIL_USERNAME"))->send(new ContactUsMail($validated['name'], $validated['email'], $validated['subject'], $validated['message_']));
            session()->flash('success', 'Message Submitted');
            $this->reset();
        } catch (TransportException $e) {
            session()->flash('error', "Unable to send message at this time.");
        } catch (\Exception $th) {
            //throw $th;
            session()->flash('error', $th->getMessage());
        }
        // dd($validated);
    }
}
