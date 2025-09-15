<?php

namespace App\Filament\Resources\BannerInformationResource\Pages;

use App\Filament\Resources\BannerInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBannerInformation extends ListRecords
{
    protected static string $resource = BannerInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
