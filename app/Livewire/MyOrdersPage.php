<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class MyOrdersPage extends Component
{
    use WithPagination;

    public function render()
    {
        $my_order = Order::where('user_id' , auth()->user()->id)->latest()->paginate(5);
        return view('livewire.my-orders-page',[
            'orders' => $my_order,
        ]);
    }
}
