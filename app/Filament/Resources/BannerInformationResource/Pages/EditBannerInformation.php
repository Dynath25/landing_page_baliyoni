<?php

namespace App\Filament\Resources\BannerInformationResource\Pages;

use App\Filament\Resources\BannerInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannerInformation extends EditRecord
{
    protected static string $resource = BannerInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
