<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Livewire\Navbar;
use App\Helpers\CartManagement;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductDetailsPage extends Component
{
    use LivewireAlert;

    public $slug;
    public $quantity = 1;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function increaseQty(){
        $this->quantity++;
    }

    public function decreaseQty(){
       if($this->quantity >1){
        $this->quantity--;
       }
    }

     //add product to cart method
     public function addToCart($product_id){
        $total_count = CartManagement::addItemsToCartWithQty($product_id , $this->quantity);
 
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);
 
        $this->alert('success', 'Product added to the cart successfully!', [
         'position' => 'top-end',
         'timer' => 3000,
         'toast' => true,
         ]);
     }

    public function render()
    {
        $productDetails = Product::where('slug', $this->slug)->firstOrFail();
        return view('livewire.product-details-page',[
            "productData" => $productDetails
        ]);
    }
}
