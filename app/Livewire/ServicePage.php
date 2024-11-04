<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class ServicePage extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.service-page',[
            "services" => $services
        ]);
    }
}
