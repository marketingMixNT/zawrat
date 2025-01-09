<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use App\Models\SpecialOfferCategory;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SpecialOfferCategoryResource\Pages;
use App\Filament\Resources\SpecialOfferCategoryResource\RelationManagers;

class SpecialOfferCategoryResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }

    protected static ?string $model = SpecialOfferCategory::class;



    protected static ?string $navigationGroup = 'Oferty specjalne';

    public static function getNavigationSort(): ?int
    {
        return 2;
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->unique(ignoreRecord: true)
                    ->minLength(3)
                    ->maxLength(255)
                    ->required()
                    ->live(debounce: 1000)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->placeholder('Przyjazny adres url który wygeneruje się automatycznie')
                    ->readOnly(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('special_offers_count')
                    ->label('Liczba ofert')
                    ->counts('specialOffers')
                    ->sortable(),
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
            'index' => Pages\ListSpecialOfferCategories::route('/'),
            'create' => Pages\CreateSpecialOfferCategory::route('/create'),
            'edit' => Pages\EditSpecialOfferCategory::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Kategoria');
    }
    public static function getPluralLabel(): string
    {
        return ('Kategorie');
    }

    public static function getLabel(): string
    {
        return ('Kategoria');
    }
}
