<?php

namespace App\Filament\Resources\DashboardResource\Pages;

use App\Filament\Resources\DashboardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDashboard extends EditRecord
{
    protected static string $resource = DashboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
