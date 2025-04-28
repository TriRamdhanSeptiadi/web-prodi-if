<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiTujuanResource\Pages;
use App\Filament\Resources\VisiMisiTujuanResource\RelationManagers;
use App\Models\VisiMisiTujuan;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiMisiTujuanResource extends Resource
{
    protected static ?string $model = VisiMisiTujuan::class;

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?string $navigationLabel = 'Visi Misi dan Tujuan';

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('visi')
                    ->columnSpanFull(),
                Repeater::make('misi')
                    ->label('Misi')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('text')
                            ->label('Misi')
                            ->required(),
                    ])
                    ->defaultItems(1)
                    ->createItemButtonLabel('Tambah Baris Misi'),
                Repeater::make('tujuan')
                    ->label('Tujuan')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('text')
                            ->label('Tujuan')
                            ->required(),
                    ])
                    ->defaultItems(1)
                    ->createItemButtonLabel('Tambah Baris Tujuan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visi')
                    ->limit(50)
                    ->html(),
                Tables\Columns\TextColumn::make('misi')
                    ->formatStateUsing(function ($state): string {
                        if (! is_array($state)) {
                            return (string) $state;
                        }

                        $lines = collect($state)
                            ->pluck('text')
                            ->map(fn($text, $i) => ($i + 1) . '. ' . $text);

                        return $lines->implode('<br>');
                    })
                    ->html()
                    ->limit(50),
                Tables\Columns\TextColumn::make('tujuan')
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
            'index' => Pages\ListVisiMisiTujuans::route('/'),
            'create' => Pages\CreateVisiMisiTujuan::route('/create'),
            'view' => Pages\ViewVisiMisiTujuan::route('/{record}'),
            'edit' => Pages\EditVisiMisiTujuan::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Visi, Misi dan Tujuan'; 
    }

    public static function getNavigationLabel(): string
    {
        return 'Visi, Misi dan Tujuan'; 
    }
}