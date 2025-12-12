<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Livewire\Component;

class ContactForm extends Component
{
    public function render()
    {
        return view('livewire.contact-form');
    }
}
