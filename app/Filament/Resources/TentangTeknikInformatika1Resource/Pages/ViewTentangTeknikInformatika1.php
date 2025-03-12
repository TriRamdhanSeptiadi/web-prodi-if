<?php

namespace App\Filament\Resources\TentangTeknikInformatika1Resource\Pages;

use App\Filament\Resources\TentangTeknikInformatika1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTentangTeknikInformatika1 extends ViewRecord
{
    protected static string $resource = TentangTeknikInformatika1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
