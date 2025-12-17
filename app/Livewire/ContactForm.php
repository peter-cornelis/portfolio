<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';
    public bool $success = false;

    public function submit()
    {
        $validated = $this->validate([ 
            'name' => 'required|string|max:100',
            'email' => 'required|email:dns|max:150',
            'message' => 'required|string|min:30|max:500'
        ],[
            'name.required' => __('messages.error.name_required'),
            'name.string' => __('messages.error.name_string'),
            'name.max' => __('messages.error.name_max'),
            'email.required' => __('messages.error.email_required'),
            'email.email' => __('messages.error.email_email'),
            'email.max' => __('messages.error.email_max'),
            'message.required' => __('messages.error.message_required'),
            'message.string' => __('messages.error.message_string'),
            'message.min' => __('messages.error.message_min'),
            'message.max' => __('messages.error.message_max'),
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new ContactFormMail($validated));
        
        $this->success = true;
        $this->reset(['name', 'email','message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
