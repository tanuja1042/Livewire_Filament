<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModelHasPermissionResource\Pages;
use App\Filament\Resources\ModelHasPermissionResource\RelationManagers;
use App\Models\ModelHasPermission;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModelHasPermissionResource extends Resource
{
    protected static ?string $model = null;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // public static function getEloquentQuery()
    // {
    //     return \DB::table('model_has_permissions');
    // }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('permission_id')
                ->label('Permission')
                ->options(Permission::all()->pluck('name', 'id'))
                ->required(),
            Forms\Components\Select::make('model_id')
                ->label('User')
                ->options(User::all()->pluck('name', 'id'))
                ->required(),
            Forms\Components\TextInput::make('model_type')
                ->default(User::class)
                ->disabled()
                ->hidden(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('permission.name')
                ->label('Permission'),
            Tables\Columns\TextColumn::make('model.name')
                ->label('User'),
            Tables\Columns\TextColumn::make('model_type')->label('Model Type'),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListModelHasPermissions::route('/'),
            'create' => Pages\CreateModelHasPermission::route('/create'),
            'edit' => Pages\EditModelHasPermission::route('/{record}/edit'),
        ];
    }
}
