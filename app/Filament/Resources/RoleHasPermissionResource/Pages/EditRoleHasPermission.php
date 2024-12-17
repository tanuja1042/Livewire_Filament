<?php

namespace App\Filament\Resources\RoleHasPermissionResource\Pages;

use App\Filament\Resources\RoleHasPermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoleHasPermission extends EditRecord
{
    protected static string $resource = RoleHasPermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
