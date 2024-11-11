<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStates;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;


class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderStates::class
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('ALL'),
            'new' => Tab::make('New')->query(fn ($query) => $query->where('status', 'new')),
            'processing' => Tab::make('Processing')->query(fn ($query) => $query->where('status', 'processing')),
            'shipping' => Tab::make('Shipping')->query(fn ($query) => $query->where('status', 'shipped')),
            'delivered' => Tab::make('Delivered')->query(fn ($query) => $query->where('status', 'delivered')),
            'canceled' => Tab::make('Cancelled')->query(fn ($query) => $query->where('status', 'canceled')),
        ];
    }
}
