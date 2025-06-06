<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutButton extends Component
{
    public function logout()
    {
        Auth::logout();

        return $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.logout-button');
    }
}
