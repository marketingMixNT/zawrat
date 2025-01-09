<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpecialOfferFeatureResource\Pages;
use App\Filament\Resources\SpecialOfferFeatureResource\RelationManagers;
use App\Models\SpecialOfferFeature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;

class SpecialOfferFeatureResource extends Resource
{
    use Translatable;
    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = SpecialOfferFeature::class;

    public static function getNavigationSort(): ?int
    {
        return 3;
    }

    protected static ?string $navigationGroup = 'Oferty specjalne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->required()

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
            'index' => Pages\ListSpecialOfferFeatures::route('/'),
            'create' => Pages\CreateSpecialOfferFeature::route('/create'),
            'edit' => Pages\EditSpecialOfferFeature::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Cecha');
    }
    public static function getPluralLabel(): string
    {
        return ('Cechy');
    }

    public static function getLabel(): string
    {
        return ('Cecha');
    }
}
