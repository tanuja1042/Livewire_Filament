<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetailsPage extends Component
{

    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }


    public function render()
    {
        $productDetails = Product::where('slug', $this->slug)->firstOrFail();
        return view('livewire.product-details-page',[
            "productData" => $productDetails
        ]);
    }
}
