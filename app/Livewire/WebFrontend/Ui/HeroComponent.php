<?php

namespace App\Livewire\WebFrontend\Ui;

use Livewire\Component;
use App\Models\Hero;

class HeroComponent extends Component
{
    public function render()
    {
        // Ambil data hero dengan status 'active'

        // Kirimkan data hero ke view
        return view('livewire.web-frontend.ui.hero-component');
    }
}
