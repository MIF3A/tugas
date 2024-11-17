<?php

namespace App\Livewire\WebFrontend;

use Livewire\Component;
use App\Models\Skill;
use App\Models\About;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.web-frontend.home-component')->layout("layouts.base");
    }
}
