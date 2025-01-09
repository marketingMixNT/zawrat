<?php

namespace App\Filament\Resources\SpecialOfferCategoryResource\Pages;

use App\Filament\Resources\SpecialOfferCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpecialOfferCategories extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = SpecialOfferCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
