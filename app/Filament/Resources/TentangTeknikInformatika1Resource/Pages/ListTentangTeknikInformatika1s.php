<?php

namespace App\Filament\Resources\TentangTeknikInformatika1Resource\Pages;

use App\Filament\Resources\TentangTeknikInformatika1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTentangTeknikInformatika1s extends ListRecords
{
    protected static string $resource = TentangTeknikInformatika1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
