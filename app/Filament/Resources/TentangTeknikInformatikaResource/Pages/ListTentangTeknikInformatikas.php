<?php

namespace App\Filament\Resources\TentangTeknikInformatikaResource\Pages;

use App\Filament\Resources\TentangTeknikInformatikaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTentangTeknikInformatikas extends ListRecords
{
    protected static string $resource = TentangTeknikInformatikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
