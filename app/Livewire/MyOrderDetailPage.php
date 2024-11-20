<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Address;

class MyOrderDetailPage extends Component
{
    public $order_id;

    public function mount($order_id){
        $this->order_id = $order_id;

    }
    public function render()
    {
        $orderItems = OrderItem::with('product')->where('order_id', $this->order_id)->get();
        $address = Address::where('order_id', $this->order_id)->first();
        $order = Order::where('id', $this->order_id)->first();
        return view('livewire.my-order-detail-page',[
            'order_items' => $orderItems,
            'address' => $address,
            'order' => $order,
        ]);
    }
}
