<?php

namespace App\Filament\Resources\ModelHasPermissionResource\Pages;

use App\Filament\Resources\ModelHasPermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModelHasPermission extends EditRecord
{
    protected static string $resource = ModelHasPermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
