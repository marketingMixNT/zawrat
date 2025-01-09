<?php

namespace App\Filament\Resources\SpecialOfferResource\Pages;

use App\Filament\Resources\SpecialOfferResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpecialOffer extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = SpecialOfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
