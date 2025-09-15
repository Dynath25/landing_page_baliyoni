<?php

namespace App\Filament\Resources\FocusesResource\Pages;

use App\Filament\Resources\FocusesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFocuses extends EditRecord
{
    protected static string $resource = FocusesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
