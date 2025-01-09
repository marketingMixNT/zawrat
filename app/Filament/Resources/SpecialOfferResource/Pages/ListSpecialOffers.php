<?php

namespace App\Filament\Resources\SpecialOfferResource\Pages;

use App\Filament\Resources\SpecialOfferResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpecialOffers extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = SpecialOfferResource::class;

    protected function getHeaderActions(): array
    {

        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
