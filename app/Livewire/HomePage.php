<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Brand;
use App\Models\Category;
use App\Models\User;

class HomePage extends Component
{
    public function render()
    {
        $services = Service::all();
        $brands = Brand::where('is_active',1)->get();
        $categories = Category::where('is_active',1)->get();
        return view('livewire.home-page',[
            "services" => $services,
            "brands" => $brands,
            "categories" => $categories
        ]);
    }
}
