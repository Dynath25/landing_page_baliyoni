<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeopleResource\Pages;
use App\Models\People;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;

class PeopleResource extends Resource
{
    protected static ?string $model = People::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('people')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('people_position')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('people_avatar')
                    ->label('Avatar')
                    ->required()
                    ->image(),
                Forms\Components\Select::make('is_active')
                    ->label('Is Active')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ])
                    ->default(1)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('people')
                    ->label('People')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('people_position')
                    ->label('Position')
                    ->searchable()
                    ->sortable(),
                BooleanColumn::make('is_active')
                    ->label('Is Active'),
                TextColumn::make('type')
                    ->label('Type')
                    ->sortable(),
                ImageColumn::make('people_avatar')
                    ->disk('public')
                    ->label('Avatar')
                    ->square()
                    ->action(
                        Action::make('Lihat Gambar')
                            ->label(false)
                            ->modalWidth('md')
                            // 2. BUNGKUS DENGAN new HtmlString()
                            ->modalContent(fn (People $record): HtmlString => 
                                new HtmlString('<img src="' . Storage::url($record->people_avatar) . '" class="w-full">')
                            )
                            ->modalSubmitAction(false)
                            ->modalCancelAction(false)
                    ),
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
                Tables\Actions\DeleteAction::make(), // <-- TAMBAHKAN BARIS INI
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
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePeople::route('/create'),
            'edit' => Pages\EditPeople::route('/{record}/edit'),
        ];
    }
}
