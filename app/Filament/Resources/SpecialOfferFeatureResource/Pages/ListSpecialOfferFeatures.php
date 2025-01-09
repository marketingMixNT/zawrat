<?php

namespace App\Filament\Resources\SpecialOfferFeatureResource\Pages;

use App\Filament\Resources\SpecialOfferFeatureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpecialOfferFeatures extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = SpecialOfferFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
