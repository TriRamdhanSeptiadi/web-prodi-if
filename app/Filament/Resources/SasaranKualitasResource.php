<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SasaranKualitasResource\Pages;
use App\Filament\Resources\SasaranKualitasResource\RelationManagers;
use App\Models\SasaranKualitas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SasaranKualitasResource extends Resource
{
    protected static ?string $model = SasaranKualitas::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Sasaran Kualitas';

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('deskripsi')
                    ->columnSpanFull()
                    ->helperText('Teks singkat sasaran kualitas dosen, mahasiswa dan lulusan (opsional). Kosongkan jika tidak ada informasi tambahan.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('deskripsi')
                    ->limit(50)
                    ->html(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSasaranKualitas::route('/'),
            'create' => Pages\CreateSasaranKualitas::route('/create'),
            'view' => Pages\ViewSasaranKualitas::route('/{record}'),
            'edit' => Pages\EditSasaranKualitas::route('/{record}/edit'),
        ];
    }
}
