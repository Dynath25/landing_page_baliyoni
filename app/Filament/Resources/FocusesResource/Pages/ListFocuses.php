<?php

namespace App\Filament\Resources\FocusesResource\Pages;

use App\Filament\Resources\FocusesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFocuses extends ListRecords
{
    protected static string $resource = FocusesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
