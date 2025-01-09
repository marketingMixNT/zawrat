<?php

namespace App\Filament\Resources\SpecialOfferCategoryResource\Pages;

use App\Filament\Resources\SpecialOfferCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSpecialOfferCategory extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = SpecialOfferCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
