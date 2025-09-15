<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerInformationResource\Pages;
use App\Models\BannerInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;

class BannerInformationResource extends Resource
{
    protected static ?string $model = BannerInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('information')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Radio::make('type')
                    ->label('Tipe Banner')
                    ->options([
                        // Menggunakan 'square' dan 'rectangle' sesuai migration
                        'square' => 'Persegi (Untuk kolom informasi)',
                        'rectangle' => 'Persegi Panjang (Untuk slider/hero)',
                    ])
                    ->required()
                    ->default('square'),
                Forms\Components\Select::make('is_active')
                    ->label('Is Active')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ])
                    ->default(1)
                    ->required(),
                Forms\Components\FileUpload::make('banner')
                    ->label('Banner')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // 1. PERBAIKAN: Mengganti 'title' menjadi 'information'
                TextColumn::make('information')
                    ->label('Information')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('banner')
                    ->label('Banner')
                    ->disk('public')
                    ->square(),

                // 2. PERBAIKAN: Hanya ada satu definisi untuk kolom 'type'
                TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'square' => 'success',
                        'rectangle' => 'info',
                    })
                    ->sortable(),

                BooleanColumn::make('is_active')
                    ->label('Is Active'),
                    
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBannerInformation::route('/'),
            'create' => Pages\CreateBannerInformation::route('/create'),
            'edit' => Pages\EditBannerInformation::route('/{record}/edit'),
        ];
    }
}