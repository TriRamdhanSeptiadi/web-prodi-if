<?php

namespace App\Filament\Resources\TentangTeknikInformatikaResource\Pages;

use App\Filament\Resources\TentangTeknikInformatikaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTentangTeknikInformatika extends EditRecord
{
    protected static string $resource = TentangTeknikInformatikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
