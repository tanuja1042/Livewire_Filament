<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModelHasRoleResource\Pages;
use App\Filament\Resources\ModelHasRoleResource\RelationManagers;
use App\Models\ModelHasRole;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModelHasRoleResource extends Resource
{
    protected static ?string $model = null;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('role_id')
                ->label('Role')
                ->options(Role::all()->pluck('name', 'id'))
                ->required(),
            Forms\Components\Select::make('model_id')
                ->label('User')
                ->options(User::all()->pluck('name', 'id'))
                ->required()
                ->helperText('This links the user to the selected role.'),
            Forms\Components\TextInput::make('model_type')
                ->default(User::class)
                ->disabled()
                ->hidden(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('role.name')
                ->label('Role'),
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
            'index' => Pages\ListModelHasRoles::route('/'),
            'create' => Pages\CreateModelHasRole::route('/create'),
            'edit' => Pages\EditModelHasRole::route('/{record}/edit'),
        ];
    }
}
