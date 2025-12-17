<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\RateLimiter;

class ContactInfo extends Component
{
    public $phone = '';
    public $email = '';
    public $showInPdf = false;

    public function mount($showInPdf)
    {
        $this->showInPdf = $showInPdf;
        
        if ($this->showInPdf) {
            $this->reveal();
        }
    }

    public function reveal()
    {
        $this->phone = config('app.contact.phone');
        $this->email = config('app.contact.email');
    }

    public function hide()
    {
        $this->phone = '';
        $this->email = '';
    }
    public function render()
    {
        return view('livewire.contact-info');
    }
}
