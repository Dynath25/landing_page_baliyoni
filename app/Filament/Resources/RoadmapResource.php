<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoadmapResource\Pages;
use App\Models\Roadmap;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RoadmapResource extends Resource
{
    protected static ?string $model = Roadmap::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('year_range')
                    ->required()
                    ->maxLength(255)
                    ->label('Year Range (e.g., 2024 or 2025-2029)'),
                
                Forms\Components\Select::make('side')
                    ->options([
                        'left' => 'Left Side',
                        'right' => 'Right Side',
                    ])
                    ->required()
                    ->label('Timeline Side'),

                Forms\Components\TextInput::make('category')
                    ->maxLength(255)
                    ->label('Category (e.g., ARTIFICIAL INTELLIGENCE)')
                    ->helperText('Leave empty if this is a research type box (e.g., Excellence Research).'),

                Forms\Components\Select::make('type')
                    ->options([
                        'Excellence Research' => 'Excellence Research',
                        'Supporting Research' => 'Supporting Research',
                        'Topic' => 'Topic',
                    ])
                    ->label('Item Type')
                    ->helperText('Select "Topic" for regular entries. Use the others for the colored boxes.'),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Title (e.g., Autonomous Vehicle)'),

                Forms\Components\Textarea::make('description')
                    ->label('Description (Optional)')
                    ->columnSpanFull(),
                
                Forms\Components\TextInput::make('display_order')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->label('Display Order'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year_range')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('side')->sortable(),
                Tables\Columns\TextColumn::make('category')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('display_order')->sortable(),
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
            ])
            ->defaultSort('display_order', 'asc');
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
            'index' => Pages\ListRoadmaps::route('/'),
            'create' => Pages\CreateRoadmap::route('/create'),
            'edit' => Pages\EditRoadmap::route('/{record}/edit'),
        ];
    }
}
