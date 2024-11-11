<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use App\Filament\Resources\OrderResource;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;

class LatestOrders extends BaseWidget
{
    protected int | string |array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(OrderResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')
                    ->label('Order Id')
                    ->searchable(),

                TextColumn::make('user.name')
                    ->searchable(),

                TextColumn::make('garnd_total')
                    ->money('INR')
                    ->searchable(),

                TextColumn::make('status')
                    ->badge(),

                TextColumn::make('payment_method')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('payment_status')
                    ->sortable()
                    ->badge()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->sortable()
                    ->label('Order Date')
                    ->dateTime(),
            ]);
    }
}
