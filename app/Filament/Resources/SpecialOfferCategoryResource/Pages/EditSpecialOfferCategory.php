<?php

namespace App\Filament\Resources\SpecialOfferCategoryResource\Pages;

use App\Filament\Resources\SpecialOfferCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpecialOfferCategory extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = SpecialOfferCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
