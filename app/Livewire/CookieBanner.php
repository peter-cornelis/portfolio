<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class CookieBanner extends Component
{
    public $bannerViewed = false;

    public function mount()
    {
        $this->bannerViewed = request()->cookie('banner_viewed') === 'true';
    }

    public function viewed()
    {
        // Remember 1 year
        $this->bannerViewed = true;
        Cookie::queue('banner_viewed', 'true', 525600);
    }

    public function render()
    {
        return view('livewire.cookie-banner');
    }
}
