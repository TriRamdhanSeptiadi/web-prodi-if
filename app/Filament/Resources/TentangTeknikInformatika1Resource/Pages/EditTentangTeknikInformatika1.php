<?php

namespace App\Filament\Resources\TentangTeknikInformatika1Resource\Pages;

use App\Filament\Resources\TentangTeknikInformatika1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTentangTeknikInformatika1 extends EditRecord
{
    protected static string $resource = TentangTeknikInformatika1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
