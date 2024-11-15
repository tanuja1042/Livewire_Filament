<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginPage extends Component
{
    public $email;
    public $password;

    //login form
    public function save(){
        $this->validate([
            'email' => 'required|email|exists:users,email|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        if(!auth()->attempt(['email' => $this->email , 'password' => $this->password])){
            // $this->addError('email' => 'there credentials do not match our records');
            session()->flash('error', 'Invalid credentials');
            return;
        }
        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
