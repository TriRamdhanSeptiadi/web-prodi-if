<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StandarKompetensiLulusanResource\Pages;
use App\Filament\Resources\StandarKompetensiLulusanResource\RelationManagers;
use App\Models\StandarKompetensiLulusan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StandarKompetensiLulusanResource extends Resource
{
    protected static ?string $model = StandarKompetensiLulusan::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Standar Kompetensi Lulusan';

    protected static ?string $navigationIcon = 'heroicon-o-document-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('teks')
                    ->columnSpanFull()
                    ->helperText('Teks singkat standar Kompetensi lulusan (opsional). Kosongkan jika tidak ada informasi tambahan.'),
                Forms\Components\RichEditor::make('deskripsi')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('teks')
                    ->limit(50)
                    ->html(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->limit(50),
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
            'index' => Pages\ListStandarKompetensiLulusans::route('/'),
            'create' => Pages\CreateStandarKompetensiLulusan::route('/create'),
            'view' => Pages\ViewStandarKompetensiLulusan::route('/{record}'),
            'edit' => Pages\EditStandarKompetensiLulusan::route('/{record}/edit'),
        ];
    }
}
