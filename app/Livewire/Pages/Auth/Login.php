<?php
namespace App\Livewire\Pages\Auth;


use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\{Layout, Title};
use Livewire\Component;


#[Layout("layouts.auth")]
class Login extends Component
{

    public LoginForm $form;
    public function render()
    {
        return view("livewire.pages.auth.login");
    }
    public function login(): void
    {

        $validated = $this->validate();
        // dd($validated);


        // $this->form->authenticate();

        // Session::regenerate();

        // $this->redirect(session('url.intended', RouteServiceProvider::HOME), navigate: true);
    }
}