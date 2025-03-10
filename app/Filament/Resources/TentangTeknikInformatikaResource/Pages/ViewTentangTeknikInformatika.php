<?php

namespace App\Filament\Resources\TentangTeknikInformatikaResource\Pages;

use App\Filament\Resources\TentangTeknikInformatikaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTentangTeknikInformatika extends ViewRecord
{
    protected static string $resource = TentangTeknikInformatikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
