<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class HomePage extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.home-page',[
            "services" => $services
        ]);
    }
}
