<?php

namespace App\Models;

use Awcodes\Shout\Components\Shout;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SpecialOfferFeature extends Model
{
    use HasTranslations;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'array',
    ];

    public function specialOffers(): BelongsToMany
    {
        return $this->belongsToMany(SpecialOffer::class);
    }

    public $translatable = [
        'title',
    ];

    // FORM
    public static function getForm(): array
    {
        return [
            Shout::make('info')
                ->content('Aby dodać tłumaczenie przejdź do dedykowanej zakładki')
                ->type('info'),
            TextInput::make('title')
                ->label('Tytuł')
                ->required()
        ];
    }
}
