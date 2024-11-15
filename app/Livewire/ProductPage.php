<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Navbar;
use App\Helpers\CartManagement;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductPage extends Component
{
    use WithPagination;
    use LivewireAlert;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];

    #[Url]
    public $featured;

    #[Url]
    public $on_sale;

    #[Url]
    public $sort = "latest";

    public $price_range = 300000;

    //add product to cart method
    public function addToCart($product_id){
       $total_count = CartManagement::addItemsToCart($product_id);

       $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

       $this->alert('success', 'Product added to the cart successfully!', [
        'position' => 'top-end',
        'timer' => 3000,
        'toast' => true,
        ]);
    }


    public function render()
    {
        $brands = Brand::where('is_active',1)->get();
        $categories = Category::where('is_active',1)->get();
        $productsQuery = Product::query()->where('is_active',1);

        if(!empty($this->selected_categories)){
            $productsQuery->whereIn('category_id',$this->selected_categories);
        }
        if(!empty($this->selected_brands)){
            $productsQuery->whereIn('brand_id',$this->selected_brands);
        }
        if(!empty($this->featured)){
            $productsQuery->where('is_featured',1);
        }
        if(!empty($this->on_sale)){
            $productsQuery->where('on_sale',1);
        }
        if($this->price_range){
            $productsQuery->whereBetween('price',[0, $this->price_range]);
        }

        if($this->sort == "latest"){
            $productsQuery->latest();
        }
        if($this->sort == "price" ){
            $productsQuery->orderBy('price');
        }
        return view('livewire.product-page',[
            "brands" => $brands,
            "categories" => $categories,
            "products" => $productsQuery->paginate(4),
        ]);
    }
}
