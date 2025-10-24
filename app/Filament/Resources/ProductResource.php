<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product; // Pastikan ini menunjuk ke model Product
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Repeater;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag'; // Ikon diubah agar sesuai

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()
                    ->required()
                    ->maxLength(255),

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->label('Category'),
                
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),

                // DIADAPTASI DARI SLIDERRESOURCE: Input untuk status
                Select::make('is_active')
                    ->label('Status')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ])
                    ->default(1)
                    ->required(),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->required()
                    ->disk('public')
                    ->directory('products')
                    ->image()
                    ->imageEditor(),

                Repeater::make('specifications')
                    ->relationship() // Menghubungkannya ke relasi 'specifications'
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('value')->required(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // DIADAPTASI DARI SLIDERRESOURCE: Kolom gambar dengan modal
                ImageColumn::make('image')
                    ->disk('public')
                    ->label('Image')
                    ->square()
                    ->action(
                        Action::make('Lihat Gambar')
                            ->label(false) // Tombol tidak punya label, jadi gambar yang bisa diklik
                            ->modalWidth('md')
                            ->modalContent(fn (Product $record): HtmlString => 
                                new HtmlString('<img src="' . Storage::url($record->image) . '" class="w-full">')
                            )
                            ->modalSubmitAction(false)
                            ->modalCancelAction(false)
                    ),

                TextColumn::make('name')->searchable(),
                TextColumn::make('category.name')->sortable(),
                TextColumn::make('price')->money('IDR')->sortable(),
                
                // DIADAPTASI DARI SLIDERRESOURCE: Kolom untuk status
                BooleanColumn::make('is_active')->label('Status'),

                TextColumn::make('description')->limit(30)->wrap(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(), // Tombol Hapus per baris
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    // ... sisa file (getRelations, getPages) tidak perlu diubah ...
    public static function getRelations(): array 
    { 
        return [
            //
        ]; 
    }
    public static function getPages(): array 
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }    
}