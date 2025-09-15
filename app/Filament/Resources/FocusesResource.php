<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FocusesResource\Pages;
use App\Filament\Resources\FocusesResource\RelationManagers;
use App\Models\Focuses;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;

class FocusesResource extends Resource
{
    protected static ?string $model = Focuses::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('focus_judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('focus_description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('focus_image')
                    ->label('Focus Image')
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
                TextColumn::make('focus_judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('focus_description')
                    ->label('Description')
                    ->searchable()
                    ->sortable(),
                BooleanColumn::make('is_active')
                    ->label('Is Active'),
                TextColumn::make('type')
                    ->label('Type')
                    ->sortable(),
                ImageColumn::make('focus_image')
                    ->disk('public')
                    ->label('Focus Image')
                    ->square()
                    ->action(
                        Action::make('Lihat Gambar')
                            ->label(false)
                            ->modalWidth('md')
                            // 2. BUNGKUS DENGAN new HtmlString()
                            ->modalContent(fn (Focuses $record): HtmlString => 
                                new HtmlString('<img src="' . Storage::url($record->focus_image) . '" class="w-full">')
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
            'index' => Pages\ListFocuses::route('/'),
            'create' => Pages\CreateFocuses::route('/create'),
            'edit' => Pages\EditFocuses::route('/{record}/edit'),
        ];
    }
}
