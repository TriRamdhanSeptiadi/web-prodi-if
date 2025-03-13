<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TentangTeknikInformatika1Resource\Pages;
use App\Filament\Resources\TentangTeknikInformatika1Resource\RelationManagers;
use App\Models\TentangTeknikInformatika;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TentangTeknikInformatika1Resource extends Resource
{
    protected static ?string $model = TentangTeknikInformatika::class;

    protected static ?string $navigationGroup = 'Tentang Kami';

    protected static ?string $navigationLabel = 'Tentang Teknik Informatika';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('thumbnail')->required(),
                Forms\Components\RichEditor::make('deskripsi')
                        ->required()
                        ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
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
            'index' => Pages\ListTentangTeknikInformatika1s::route('/'),
            'create' => Pages\CreateTentangTeknikInformatika1::route('/create'),
            'view' => Pages\ViewTentangTeknikInformatika1::route('/{record}'),
            'edit' => Pages\EditTentangTeknikInformatika1::route('/{record}/edit'),
        ];
    }
}
