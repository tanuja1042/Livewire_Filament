<?php

namespace App\Filament\Resources\RoleHasPermissionResource\Pages;

use App\Filament\Resources\RoleHasPermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoleHasPermissions extends ListRecords
{
    protected static string $resource = RoleHasPermissionResource::class;

    /**
     * Customize how the table identifies records.
     */
    public function getTableRecordKey($record): string
    {
        // Use the composite key: role_id and permission_id
        return $record->role_id . '_' . $record->permission_id;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
