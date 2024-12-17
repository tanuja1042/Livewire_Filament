<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoleHasPermissionResource\Pages;
use App\Filament\Resources\RoleHasPermissionResource\RelationManagers;
use App\Models\RoleHasPermission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoleHasPermissionResource extends Resource
{
    protected static ?string $model = RoleHasPermission::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()
            ->orderBy('created_at'); // Ensure ordering is by a valid column
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('role_id')
                ->label('Role')
                ->options(\Spatie\Permission\Models\Role::all()->pluck('name', 'id'))
                ->required(),
            Forms\Components\Select::make('permission_id')
                ->label('Permission')
                ->options(\Spatie\Permission\Models\Permission::all()->pluck('name', 'id'))
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('role.name')
                ->label('Role'),
            Tables\Columns\TextColumn::make('permission.name')
                ->label('Permission'),
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
            'index' => Pages\ListRoleHasPermissions::route('/'),
            'create' => Pages\CreateRoleHasPermission::route('/create'),
            'edit' => Pages\EditRoleHasPermission::route('/{record}/edit'),
        ];
    }
}
