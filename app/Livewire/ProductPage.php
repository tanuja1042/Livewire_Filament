<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class ProductPage extends Component
{
    use WithPagination;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];

    #[Url]
    public $featured;

    #[Url]
    public $on_sale;

    public $price_range = 300000;

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
        return view('livewire.product-page',[
            "brands" => $brands,
            "categories" => $categories,
            "products" => $productsQuery->paginate(4),
        ]);
    }
}
