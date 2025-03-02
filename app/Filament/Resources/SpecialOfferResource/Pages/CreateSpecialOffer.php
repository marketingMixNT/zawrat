<?php

namespace App\Filament\Resources\SpecialOfferResource\Pages;

use App\Filament\Resources\SpecialOfferResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSpecialOffer extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = SpecialOfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
