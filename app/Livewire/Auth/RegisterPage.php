<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;

    //register form
    public function save(){
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        //save the data
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        //login user
        auth()->login($user);

        //redirect to home page
        return redirect()->intended();
    }


    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
