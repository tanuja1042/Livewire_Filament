<?php

namespace App\Livewire;

use Livewire\Component;
// use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $successMessage;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|min:5',
    ];

    public function submitForm()
    {
        $this->validate();

        // Send email
        Mail::send([], [], function (Message $message) {
            $message->to('admin@example.com')
                    ->subject('Contact Form Submission')
                    ->html("
                        <p><strong>Name:</strong> {$this->name}</p>
                        <p><strong>Email:</strong> {$this->email}</p>
                        <p><strong>Message:</strong><br>{$this->message}</p>
                    ");
        });

        // Clear the form and set success message
        $this->reset(['name', 'email', 'message']);
        $this->successMessage = 'Your message has been sent successfully!';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

