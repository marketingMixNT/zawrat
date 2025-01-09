<?php

namespace App\Observers;

use App\Models\SpecialOffer;
use Illuminate\Support\Facades\Storage;

class SpecialOfferObserver
{
    /**
     * Handle the SpecialOffer "created" event.
     */
    public function created(SpecialOffer $specialOffer): void
    {
        //
    }

    /**
     * Handle the SpecialOffer "updated" event.
     */
    public function updated(SpecialOffer $specialOffer): void
    {
        if ($specialOffer->isDirty('thumbnail')) {
            Storage::disk('public')->delete($specialOffer->getOriginal('image'));
        }
    }

    /**
     * Handle the SpecialOffer "deleted" event.
     */
    public function deleted(SpecialOffer $specialOffer): void
    {
        if (!is_null($specialOffer->image)) {
            Storage::disk('public')->delete($specialOffer->getOriginal('image'));
        }
    }

    /**
     * Handle the SpecialOffer "restored" event.
     */
    public function restored(SpecialOffer $specialOffer): void
    {
        //
    }

    /**
     * Handle the SpecialOffer "force deleted" event.
     */
    public function forceDeleted(SpecialOffer $specialOffer): void
    {
        //
    }
}
