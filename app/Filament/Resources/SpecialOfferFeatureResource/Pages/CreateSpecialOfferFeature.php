<?php

namespace App\Filament\Resources\SpecialOfferFeatureResource\Pages;

use App\Filament\Resources\SpecialOfferFeatureResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSpecialOfferFeature extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = SpecialOfferFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
