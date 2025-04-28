<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KataSambutanResource\Pages;
use App\Filament\Resources\KataSambutanResource\RelationManagers;
use App\Models\PimpinanStaff;
use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KataSambutanResource extends Resource
{
    protected static ?string $model = PimpinanStaff::class;

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?string $navigationLabel = 'Kata Sambutan';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->imageEditor() // aktifkan fitur crop/edit bawaan Filament
                    ->imageResizeTargetWidth(1000)
                    ->imageResizeTargetHeight(1700)
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Kepala Program Studi Teknik Informatika' => 'Kepala Program Studi Teknik Informatika',
                        'Dosen' => 'Dosen',
                        'Staff' => 'Staff',
                    ])
                    ->reactive()
                    ->required(),
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\RichEditor::make('kata_sambutan')
                    ->visible(fn (Get $get) => $get('status') === 'Kepala Program Studi Teknik Informatika')
                    ->required(fn (Get $get): bool => $get('status') === 'Kepala Program Studi Teknik Informatika')
                    ->columnSpanFull()
                    ->label('Kata Sambutan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('kata_sambutan')
                    ->limit(50)
                    ->label('Kata Sambutan')
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
                Tables\Filters\SelectFilter::make('status')
                ->options([
                    'Kepala Program Studi Teknik Informatika' => 'Kepala Program Studi Teknik Informatika',
                ])
                ->default('Kepala Program Studi Teknik Informatika')
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
            'index' => Pages\ListKataSambutans::route('/'),
            'create' => Pages\CreateKataSambutan::route('/create'),
            'view' => Pages\ViewKataSambutan::route('/{record}'),
            'edit' => Pages\EditKataSambutan::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Kata Sambutan'; 
    }

    public static function getNavigationLabel(): string
    {
        return 'Kata Sambutan'; 
    }
}