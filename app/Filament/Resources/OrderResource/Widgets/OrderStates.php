<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Order;
use Illuminate\Support\Number;

class OrderStates extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Order', Order::query()->where('status','new')->count()),
            Stat::make('Order Processing', Order::query()->where('status','processing')->count()),
            Stat::make('Order shipped', Order::query()->where('status','shipped')->count()),
            Stat::make('Average Price', Number::currency(Order::query()->avg('grand_total')),'INR'),
        ];
    }
}
