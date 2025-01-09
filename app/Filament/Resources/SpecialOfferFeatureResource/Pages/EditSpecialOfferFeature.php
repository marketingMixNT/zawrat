<?php

namespace App\Filament\Resources\SpecialOfferFeatureResource\Pages;

use App\Filament\Resources\SpecialOfferFeatureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpecialOfferFeature extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = SpecialOfferFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
