<?php

namespace App\Livewire\Pages\Admin;

use App\Mail\SendCustomerMail;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Symfony\Component\Mailer\Exception\TransportException;

#[Layout("layouts.app")]
#[Title("Send Mail")]
class SendMail extends Component
{

    #[Rule("required")]
    public string $customer_id;

    #[Rule("required")]
    public string $subject;

    #[Rule("required")]
    public string $body;

    public static function fixMailBody(string $body): string
    {
        // $body = str_replace("","", $body);
        if ($body == "") {
            return "<br>";
        } else {
            return "<p style=\"color:#000000;margin: 0 0 0px\">" . $body . "</p>";
        }
    }

    public function submit()
    {
        $validated = $this->validate();
        $validated['body'] = join('', array_map("App\Livewire\Pages\Admin\SendMail::fixMailBody", explode("\n", $validated["body"])));
        try {
            $reciever = Customer::query()->where("id", $validated["customer_id"])->first();
            Mail::to($reciever['email'])->send(new SendCustomerMail($validated['subject'], $validated['body']));
            session()->flash('success', 'Message Submitted');
            $this->reset();
        } catch (TransportException $e) {
            session()->flash('error', "Unable to send message at this time.");
        } catch (\Exception $th) {
            //throw $th;
            session()->flash('error', $th->getMessage());
        }
    }
    public function render()
    {
        return view(
            'livewire.pages.admin.send-mail',
            ['customers' => Customer::query()->get()]
        );
    }
}
