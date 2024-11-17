<?php

namespace App\Livewire\WebFrontend;

use Livewire\Component;
use App\Models\Skill;
use App\Models\About;

class HomeComponent extends Component
{
    public function render()
    {
        $about=About::first();
        return view('livewire.web-frontend.home-component',['about'=>$about])->layout("layouts.base");
    }
}
